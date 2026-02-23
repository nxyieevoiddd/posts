<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\User;
use Illuminate\View\View;

class PostController extends Controller
{
    public function create() 
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        Post::create([
            'title' =>  $request->input('title'),
            'content' =>  $request->input('content')
        ]);
        return "sucess";
    }
}