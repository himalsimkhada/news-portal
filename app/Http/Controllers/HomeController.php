<?php

namespace App\Http\Controllers;

use App\Models\Admin\Category;
use App\Models\Admin\Post;
use App\Models\Admin\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $all_news = Post::orderBy('created_at', 'DESC')->limit(15)->get();
        $lifestyle_news = Post::where('category_id', 2)->orderBy('created_at', 'DESC')->limit(15)->get();
        $posts = Post::where('status', 3)->first();
        $featured = Post::where('featured', 1)
            ->orderBy('created_at', 'DESC')->limit(3)->get();
        return view('nepali.home', compact('posts', 'featured', 'all_news', 'lifestyle_news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
        $post = Post::with('author')->where('id', $id)->first();
        $tagId = [];
        foreach($post->tags as $tag){
            $tagId[] = $tag['id'];
        }
        $tag = tag::whereIn('id', $tagId)->get();
        $postId = [];
        foreach($tag as $tag){
            foreach($tag->posts as $post){
                $postId[] = $post->id;
            }
        }
        sort($postId);
        $postId = array_unique($postId);
        $relatedPost = Post::whereIn('id', $postId)->limit(8)->get();
        return view('nepali.details', compact('post', 'relatedPost'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }
}
