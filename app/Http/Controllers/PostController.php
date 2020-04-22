<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function GetAllPosts(Request $request)
    {
        $posts = Post::all();
        $login = $request->session()->get('login');

        return view('forum.index')->with('posts', $posts)->with('login', $login);
    }

    public function GetPostByID($id)
    {
        $post = Post::find($id);

        return view('forum.detail')->with('post', $post);
    }

    public function CreatePost(Request $request)
    {
        $input = $request->all();
        extract($input);

        $userId = $request->session()->get('id');

        $post = new Post;
        $post->title = $title;
        $post->content = $content;
        $post->author = $userId;
        $image = $request->file('image');
        $image_title = $title . "_" . date('Y-m-d') . '.' . $image->getClientOriginalExtension();
        $image->move("upload/post/", $image_title);
        $post->image = "upload/post/" . $image_title;
        $post->save();

        return redirect(url('/forum'))->with('success',"Post Created");
    }

    public function DeletePost($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect(url('/dashboard'))->with('success',"Post Deleted");
    }

    public function UpdatePost(Request $request)
    {
        
        $input = $request->all();
        extract($input);

        $post = Post::find($id);
        $post->title = $title;
        $post->content = $content;
        $post->save();

        return redirect(url('/dashboard'))->with('success',"Post Updated");
    }
}
