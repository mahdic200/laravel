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
        // $users = DB::table('users')->insert([
        //     ['name' => 'mahdi',
        //     'email' => 'email@gmail.com',
        //     'email_verified_at' => '2022-07-21 18:38:43	',
        //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'],
        //     ['name' => 'hassan',
        //     'email' => 'email2@gmail.com',
        //     'email_verified_at' => '2022-07-21 18:38:45	',
        //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'],

        // ]);
        // $id = DB::table('users')->insertGetId([
        //     'name' => 'mahdi',
        //         'email' => 'email@gmail.com',
        //         'email_verified_at' => '2022-07-21 18:38:43	',
        //         'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'
        // ]);
        // $user = DB::table('users')->where('id', 1)->update([
        //     'name' => 'hassan'
        // ]);
        $user = DB::table('users')->updateOrInsert(
            ['name' => 'mahdi', 'email' => 'email@gmial.com', ],
            ['password' => 'password'],
        );

        

        dd($user);
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
