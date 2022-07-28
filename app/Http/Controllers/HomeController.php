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
        // $post = Post::find(1);
        
        // $comment = new Comment;
        // $comment->comment = "باح باح";
        // $post->comments()->save($comment);

        // $post = Post::find(20);
        // dd($post->tags);
        // $video = Video::find(1);
        // dd($video->tags);

        $tag = Tag::find(1);
        // dd($tag->videos);
        dd($tag->posts);

        return view('welcome');
    }
}
