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
        $messages = [
            'errors' => [
                'something went wrong',

            ],
            'messages' => [
                'create successfully',
            ],

        ];

        // $messagebag = new \Illuminate\Support\MessageBag($messages);

        // $error = new \Illuminate\Support\MessageBag();
        // $error->add('error', 'something went wrong');


        return view('home')->withErrors(['error' => 'خطایی رخ داد !']);
    }
}
