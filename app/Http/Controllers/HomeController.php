<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // foreach (User::where('created_at', '<', now())->cursor() as $user)
        // {
        //     dd($user);
        // }

        // $post = new Post();
        // $post->title = 'test title';
        // $post->user_id = '35';
        // $post->save();

        // $post = new Post([
        //     'title' => 'ی چیزی همینطوری',
        //     'user_id' => 15,
        // ]);
        // $post->save();

        // $post = Post::make([
        //     'title' => 'ی چیزی همینطوری چرت و پرت',
        //     'user_id' => 56,
        // ]);
        // $post->save();

        $post = Post::create([
            'title' => 'ی چیزی که بفهمم کد درسته',
            'user_id' => 32,
        ]);

        return view('home');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
