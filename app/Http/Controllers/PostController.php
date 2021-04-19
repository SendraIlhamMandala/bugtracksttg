<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //



    public function index()
    {
        $posts = Post::latest()->with('user', 'likes')->paginate(10, ['*'], 'oldest');

        // $postLatestAuth = Post::where('user_id', auth()->user()->id)->paginate(4, ['*'], 'latest');
        return view('posts.index', [
            'posts' => $posts,
            // 'postLatestAuth' => $postLatestAuth,

        ]);
        # code...
    }

    public function show(Post $post)
    {



        return view('posts.show', [
            'post' => $post,
        ]);
        # code...
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'body' => 'required'
        ]);
        $request->user()->posts()->create($request->only('body'));

        return back();
    }

    public function destroy(Post $post)
    {
        # code...

        $this->authorize('delete', $post);

        $post->delete();
        return \back();
    }
}
