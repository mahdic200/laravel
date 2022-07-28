<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Post;
use App\User;
use App\Image;
use App\Video;
use App\Address;
use App\Comment;
use App\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        // $posts = Post::all();
        // foreach($posts as $post)
        // {
        //     dd($post, $post->comments);
        // }

        // $posts = Post::with('comments')->get();
        // dd($posts[24]);

        // $posts = Post::with(['comments', 'author'])->get();

        // $posts = Post::withCount(['comments'])->get();
        // dd($posts[24]);

        
        // $posts = Post::with(['comments', 'comment.user'])->get();
        // $posts = Post::with('comments:is,body')->get();
        // $posts = Post::with('comments:is,body')->get();
        // $posts = Post::with(['comments' => function($query) {
        //     $query->where('id', '1');
        // }])->get();
        // dd($posts[24]);

        

        return view('welcome');
    }
}
