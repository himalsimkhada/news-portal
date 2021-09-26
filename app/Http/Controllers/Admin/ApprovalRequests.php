<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Post;
use Illuminate\Http\Request;

class ApprovalRequests extends Controller {
    public function index() {
        $requests = Post::with('category', 'author', 'moderator')->where('status', 2)->get();

        return view('admin.approvalreqs.requests', compact('requests'));
    }

    public function update($id) {
        Post::where('id', $id)->update(['status' => 3]);
        return redirect()->back();
    }
}
