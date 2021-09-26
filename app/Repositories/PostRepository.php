<?php

namespace App\Repositories;

use App\Models\Admin\Post;
use App\Models\Admin\Category;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Cache;
use Intervention\Image\Facades\Image;
use App\Contracts\PostRepositoryInterface;

class PostRepository implements PostRepositoryInterface {
    // Post Index
    public function indexPost() {
        $posts = config('coderz.caching', true)
            ? (Cache::has('posts') ? Cache::get('posts') : Cache::rememberForever('posts', function () {
                return Post::with('category', 'author', 'moderator')->latest()->get();
            }))
            : Post::with('category', 'author', 'moderator')->latest()->get();
        return compact('posts');
    }

    // Post Create
    public function createPost() {
        $parentcategories = Category::whereNull('category_id')->with('childrenCategories')->get();
        return compact('parentcategories');
    }

    // Post Store
    public function storePost(PostRequest $request) {
        $post = Post::create($request->validated());
        $this->uploadImage($post);
    }

    // Post Show
    public function showPost(Post $post) {
        return compact('post');
    }

    // Post Edit
    public function editPost(Post $post) {
        $parentcategories = Category::whereNull('category_id')->with('childrenCategories')->get();
        return compact('post', 'parentcategories');
    }

    // Post Update
    public function updatePost(PostRequest $request, Post $post) {
        $post->update($request->validated());
        $this->uploadImage($post);
    }

    // Post Destroy
    public function destroyPost(Post $post) {
        $post->delete();
    }

    // Upload Image
    protected function uploadImage(Post $post) {
        if (request()->has('image')) {
            $post->update([
                'image' => request()->image->store('news/post/' . validImageFolder($post->name), 'public')
            ]);
            $image = Image::make(request()->file('image')->getRealPath());
            $image->save(public_path('storage/' . $post->image));
        }
    }
}
