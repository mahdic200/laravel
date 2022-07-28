<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Post;
use App\User;
use App\Address;
use App\Comment;
use App\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        // $post = Post::find(1);
        // dd($post->tags);

        // $tag = Tag::find(2);
        // dd($tag->posts);

        // attach
        // $post = Post::find(1);
        // $post->tags()->attach(1);

        // detach
        // $post = Post::find(1);
        // $post->tags()->detach(1);

        // sync
        // $post = Post::find(20);
        // $post->tags()->sync(2);

        // additional row in pivot table
        $post = Post::find(20);
        dd($post->tags()->first()->pivot->value);
        

        return view('welcome');
    }
}
