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
        // $post = Post::find(20);
        // dd($post->comments);

        // $video = Video::find(1);
        // dd($video->comments);

        $comment = Comment::find(4);
        dd($comment->commentable);
        
        return view('welcome');
    }
}
