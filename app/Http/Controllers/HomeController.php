<?php

namespace App\Http\Controllers;

use App\Models\Admin\Category;
use App\Models\Admin\Post;
use App\Models\Admin\Tag;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Pratiksh\Nepalidate\Facades\NepaliDate;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_news = Post::where('status', 3)->orderBy('created_at', 'DESC')->get();
        $lifestyle_news = Post::where('category_id', 2)->where('status', 3)->orderBy('created_at', 'DESC')->get();
        $featured = Post::where('featured', 1)->where('status', 3)
            ->orderBy('created_at', 'DESC')->get();
        $international_news = Post::where('category_id', 2)->where('status', 3)->orderBy('created_at', 'DESC')->get();
        $sports_news = Post::where('category_id', 3)->where('status', 3)->orderBy('created_at', 'DESC')->get();
        return view('nepali.home', compact('featured', 'all_news', 'lifestyle_news', 'international_news', 'sports_news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {

        // $posts = Post::all();

        $post = Post::with('author', 'tags')->where('slug', $slug)->first();
        // dd($post);
        $tagId = [];
        foreach ($post->tags as $tag) {
            $tagId[] = $tag['id'];
        }
        $tag = Tag::whereIn('id', $tagId)->get();
        $postId = [];
        foreach ($tag as $value) {
            foreach ($value->posts as $value2) {
                $postId[] = $value2->id;
            }
        }
        sort($postId);
        $postId = array_unique($postId);
        $relatedPost = Post::whereIn('id', $postId)->limit(8)->get();
        // dd($relatedPost->isEmpty());
        $nepaliDate = NepaliDate::create($post->created_at)->toFormattedNepaliDate();
        // dd($post);
        return view('nepali.details', compact('post', 'nepaliDate', 'relatedPost'));
    }

    public function categoryPost($id)
    {
        $category = Post::with('category')->where('category_id', $id);
        $posts = $category->paginate(12);
        $name = $category->first()->category->name;
        return view('nepali.category', compact('posts', 'name'));
    }

    public function relatedPost($slug)
    {

        $post = Post::with('author', 'tags')->where('slug', $slug)->first();
        // dd($post);
        $tagId = [];
        foreach ($post->tags as $tag) {
            $tagId[] = $tag['id'];
        }
        $tag = Tag::whereIn('id', $tagId)->get();
        $postId = [];
        foreach ($tag as $value) {
            foreach ($value->posts as $value2) {
                $postId[] = $value2->id;
            }
        }
        sort($postId);
        $postId = array_unique($postId);
        $relatedPost = Post::whereIn('id', $postId)->paginate(12);
        return view('nepali.related-post', compact('post', 'relatedPost'));
    }

    public function tagPost($tag)
    {
        $tag = Tag::with('posts')->where('name', $tag)->first();
        $post = $tag->posts()->paginate(12);
        return view('nepali.tag-post', compact('post', 'tag'));
    }
    public function aboutUs()
    {
        return view('nepali.about-us');
    }

    public function contactUsView()
    {
        return view('nepali.contact-us');
    }

    public function contactUsForm(Request $request)
    {
        $rule = [
            'name' => 'required|max:255',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'message' => 'required|max:255'
        ];
        $customMessage = [
            'name.required' => 'कृपया तपाइँको नाम प्रविष्ट गर्नुहोस्।',
            'phone.required' => 'कृपया आफ्नो फोन नम्बर प्रविष्ट गर्नुहोस्।',
            'phone.numeric' => 'फोन नम्बर नम्बर हुनुपर्छ।',
            'email.required' => 'कृपया तपाइँको ईमेल ठेगाना प्रविष्ट गर्नुहोस्।',
            'email.email' => 'ईमेल एक मान्य ईमेल हुनु पर्छ।',
            'message.required' => 'कृपया तपाइँको सन्देश प्रविष्ट गर्नुहोस्।',
        ];
        $data = $this->validate($request, $rule, $customMessage);

        $contactus = ContactUs::create($data);

        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
