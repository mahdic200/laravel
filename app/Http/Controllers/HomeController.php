<?php

namespace App\Http\Controllers;

use App\User;
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
        // برای لاگ این دستی 
        // if (auth()->attempt([
        //     'email' => 'rmahdi170@gmail.com',
        //     'password' => 'password',
        // ]))
        // {
        //     return 'yes';
        // }
        // auth()->loginUsingId(2);

        // $user = User::find(7);
        // auth()->login($user);
        

        // auth()->once([
        //     'email' => 'rmahdi170@gmail.com',
        //     'password' => 'password',
        // ]);

        // auth()->logoutOtherDevices('password');
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // auth()->logout();
        return view('home');
    }

}
