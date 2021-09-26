<?php

namespace App\Contracts;

use App\Models\Admin\Post;
use App\Http\Requests\PostRequest;

interface PostRepositoryInterface
{
    public function indexPost();

    public function createPost();

    public function storePost(PostRequest $request);

    public function showPost(Post $Post);

    public function editPost(Post $Post);

    public function updatePost(PostRequest $request, Post $Post);

    public function destroyPost(Post $Post);
}
