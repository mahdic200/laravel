<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Post;
use App\User;
use App\Address;
use App\Comment;
use App\Country;
use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        // $post = Post::find(1);
        // dd($post->image->url);

        // $user = User::find(1);
        // dd($user->image);

        // $image = Image::find(2);
        // dd($image->imageable);
        
        return view('welcome');
    }
}
