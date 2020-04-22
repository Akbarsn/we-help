<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function GetDashboard(Request $request)
    {
        $userId = $request->session()->get('id');
        $posts = Post::where('author', $userId)->get();

        return view('page.dashboard')->with('posts', $posts);
    }
}
