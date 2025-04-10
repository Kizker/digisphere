<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return view('home');
    }
    public function blog()
    {
        return view('blog');
    }
    public function blog_details()
    {
        return view('blog-details');
    }
}