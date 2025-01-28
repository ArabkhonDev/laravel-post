<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function main()
    {
        return view('main');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function project()
    {
        return view('project');
    }

    public function service()
    {
        return view('service');
    }

    public function blog_detail()
    {
        return view('blog_detail');
    }

    public function last_blog()
    {
        return view('last_blog');
    }
  
}
