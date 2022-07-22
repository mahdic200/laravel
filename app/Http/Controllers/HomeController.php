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
        // $first = DB::table('users')->whereNull('updated_at');
        // $users = DB::table('users')->whereNull('created_at')->union($first)->get();
        // $users = DB::table('users')->orderBy('id', 'ASC')->get();
        // $users = DB::table('users')->latest()->first();
        // $users = DB::table('users')->inRandomOrder()->first();
        // $users = DB::table('users')->take(5)->get();
        // $users = DB::table('users')->skip('10')->take(5)->get();
        
        
        // $users = DB::table('posts')->groupBy('user_id')->having('user_id', '>', 70)->get();
        $users = DB::table('posts')->groupBy('user_id')->select('user_id', DB::raw("count(*) as total"))->get();

        dd($users);
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
