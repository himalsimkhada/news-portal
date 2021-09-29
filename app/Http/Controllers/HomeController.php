<?php

namespace App\Http\Controllers;

use App\Models\Admin\Category;
use App\Models\Admin\Post;
use Illuminate\Http\Request;
use Pratiksh\Nepalidate\Facades\NepaliDate;

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
        $nepaliDate = NepaliDate::create($post->created_at)->toFormattedNepaliDate();
        return view('nepali.details', compact('post', 'nepaliDate'));
    }

    public function categoryPost($id){
        $category = Post::with('category')->where('category_id', $id);
        $posts = $category->get();
        $name = $posts->first()->category->name;
        return view('nepali.category', compact('posts', 'name'));
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
