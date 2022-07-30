<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // dd(\Hash::make('test'));

        // dd(\Hash::check('test', '$2y$10$AHTvfbM1oneI/fGXCKwPg.Fb/C9NBaBwDvN6FZSZk1zNwdKCslmRC'));
        
        // dd(encrypt('test'));

        // dd(decrypt('eyJpdiI6InJwVFN1d1Z4TjdhanhYT09obEYrQkE9PSIsInZhbHVlIjoiOTBHKzFkSnhHdWlQQjg1WUw0WjJVUT09IiwibWFjIjoiMDEwMWNhZTQ4YzY1ZmUyMGJhN2RjZDVlOTA3MTUwNWJiZGE2NzA2ZjliY2IyNjU2MGU4ZDBmM2ZlMzU5Njg5NCJ9'));


        // dd(Crypt::encryptString('test'));

        // dd(Crypt::decryptString('eyJpdiI6IndGOUhSZWJyeTFkTCtUTWtRN0tDMEE9PSIsInZhbHVlIjoibmpXcGJtQVdHNHBrN3NyMTRhV2pXUT09IiwibWFjIjoiMDJiOGMwZmE4MzU0NmNlZDIxYTM1MDRlYTllMWYxODQwMjA3NTIxMGI3YzAzOWViYWJlZDdmYmI5NzI1MWQyMiJ9'));
        
        return view('home');
    }

}
