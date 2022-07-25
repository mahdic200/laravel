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
        // $users = User::where('id', 85)->get();
        // $users = User::orderBy('id', 'DESC')->take()->get();
        // $user = User::where('id', 4)->get()->first();
        // $user->name = 'nima';
        // $user->refresh();
        // $users = User::find([
        //     85,84,83
        // ]);
        // try
        // {
        // $users = User::findOrFail(123);
        // }
        // catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e)
        // {
        //     return $e->getMessage();
        // }

        // User::chunk(20, function($users) {
        //     foreach ($users as $user) {
        //         dd($users);
        //     }
        // });
        // dd($users);
        // return view('home', compact('users'));
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
