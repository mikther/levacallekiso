<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class Photocontroller extends Controller
{
    public function index(Post $post)
    {
        return post->get();
    }
    
}
