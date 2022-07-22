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
        // $users = DB::table('users')->whereBetween('id', [1, 10])->get();
        // $users = DB::table('users')->whereNotBetween('id', [1, 10])->get();
        // $users = DB::table('users')->whereIn('id', [1, 10])->get();
        // $users = DB::table('users')->whereNotIn('id', [1, 10])->get();
        // $users = DB::table('users')->whereNull('updated_at')->get();
        // $users = DB::table('users')->whereNotNull('updated_at')->get();
        // $users = DB::table('users')->whereDate('updated_at', '2022-7-21')->get();
        // $users = DB::table('users')->whereColumn('name', '<>', 'email')->get();
        $users = DB::table('users')->where('id', 1)->orWhere('id' , 2)->where(function($query) {
            $query->where('name', 'mahdi')->orWhere('email', 'email@gmail.com');
        })->get();

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
