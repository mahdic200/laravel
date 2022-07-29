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

// episode69
// Route::get('/', 'HomeController@index');
/*
    polymorphy manytomany relations

*/

// episode70
// Route::get('/', 'HomeController@index');
/*
    ایگر لودینگ ؟

    $posts = Post::with('اسم اون رابطه ایی که تو متود ساختی');
    loadMissing() 
/*

// episode71
// Route::get('/', 'HomeController@index');
/*
    تست ها خیلی مهمن باید حسابی روشون کار کنی
*/

// episode72
// Route::get('/', 'HomeController@index');
/*
    ی سریع توضیحات بود فقط
*/

// episode73
Route::get('/', 'HomeController@index');
/*
    :| و باز هم نصب کردن پکیج های مختلف 
    npm install
    بعد از نصب ی فایل داری
    webpack.mix.js
    npm run dev
    npm run watch

*/

// episode74
// Route::get('/', 'HomeController@index');
/*
    error handling
    validation

*/

// episode75
Route::resource('post', 'PostController');
/*
    $request->path() -> مسیری که در اون هستی رو نشونت میده
    user input , $request's methods
*/