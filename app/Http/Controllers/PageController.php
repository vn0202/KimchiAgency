<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function sendMessage(Request $request){

   $rules = [
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string'
        ];
        $validated = $request->validate($rules);

        Contact::create($validated);
        return redirect()->back()->with('success', 'Your message has been sent');
    }

    public function index()
    {
        return view('pages.index');
    }

    public function worksPage(Request $request, string $cat = 'strategic-planning' )
    {

         $cat = Category::where("slug", $cat)->firstOrFail();

         $cats = Category::has("posts")->get();

         $posts = Post::where("category_id", $cat->id)->orderBy("created_at", "desc")->get();

        return view("pages.works", ["cat" => $cat, 'cats' => $cats, 'posts' => $posts]);
    }
    public function detail(Request $request)
    {

        return view("pages.blogs.detail");
    }

    public function about()
    {
        $cats = Category::has("posts")->get();

        return view ("pages.about", ['cats' => $cats]);
    }

    public function careerPages(Request $request, string $page = '' )
    {

        if(!$page){
            return view("pages.careers");
        }
        return view("pages.careers.$page");
    }
}
