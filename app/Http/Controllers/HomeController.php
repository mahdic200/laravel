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
        // $post = Post::firstOrCreate(
        //     ['title' => 'Minus libero et praesentium. Laborum et ad minima impedit ea mahdi is a good boy qui et animi quia praesentium.', 
        //     'user_id' => '30'
        // ],
        // );
        // $post = Post::find('171');
        // $post->delete();
        
        // $post = Post::destroy(170);
        // $post = Post::destroy([169, 168]);
        // $post = Post::where('id', 40)->delete();
        
        // $post = Post::where('id', 39)->delete();
        // $post = Post::withTrashed()->get();
        // $post = Post::onlyTrashed()->restore();
        // $post = Post::onlyTrashed()->forceDelete();


        // dd($post);
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
