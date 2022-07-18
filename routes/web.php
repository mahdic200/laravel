<?php


use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// episode27
// test in laravel - part 2
// episode17
Route::get('/', 'App\Http\Controllers\HomeController@index');
// according to episode 17
// making a test file in php
//php artisan make:test <name> --unit

// فقط ی تست خاص انجام بشه
//./vendor/bin/phpnuit --filter <TestName>
// in folder test/Unit you can find what you wrote