<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        // این روش من بود
        // $this->middleware('auth');
    }
    public function index()
    {
        return view('admin');
    }
}
