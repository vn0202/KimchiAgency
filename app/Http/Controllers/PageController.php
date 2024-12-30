<?php

namespace App\Http\Controllers;

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

    }

    public function index()
    {
        return view('pages.index');
    }

    public function worksPage(Request $request, string $cat = 'strategic-planning' )
    {

        return view("pages.works", ["cat" => $cat]);
    }
    public function detail(Request $request)
    {

        return view("pages.blogs.detail");
    }

    public function careerPages(Request $request, string $page = '' )
    {

        return view("pages.careers.$page", );
    }
}
