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

Route::get('/', function () {
    return view('home');
});

// episode23
// Route::any('/test', 'HomeController@index');

// making a service provider and adding its name to folder config
// php artisan make:provider <ProviderName> 


//episode24

// Route::any('/', function(App\Car $car) {
//     return view('home', compact('car'));
// });

// episode25
// custom if statement