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

// episode43
/*
    increment and decrement
    increment -> increases one point 

    where('column', 'value')->increment('column')

    decrenent does exactly the oposite what increment does
    where('column', 'value')->decrement('column')
    
    من این و خوب میشناسم :)
    $users = DB::table('users')->where('id', 89)->delete();


    آقای خسروجردی ی چیزی درباره ترانکیت گفت
    ولی خب زیاد توضیح نداد 
    گفت اگر میخواین آیدی هارو از صفر بشماره باید ازش
    استفاده کنیم

    transaction
    به معنی معامله

    عملیاتی باید کامل انجام بشه تا همه به ثمر برسه 
    اگر حین عملیات چیزی به مشکل بر بخوره هر کاری رو که کرده
    رول بک میزنه
    DB::transaction(function() {
        do what you want to do
    })
*/
// Route::any('/', 'HomeController@index');

// episode44
/*
    آشنایی با مدل و الکوئنت
    درست کردن ی مدل جدید با ترمینال
    php artisan meke:model <name>
    با اضافه کردن 
    -a 
    میتونی بهش بگی که علاوه بر مدلش ، کنترلر و 
    میگریشنش و فکتوری و ریسورس هم میسازه 
    php artisan meke:model -a <name>
*/

// episode45
// Route::get('/show-user/{id}', 'HomeController@showUser');
// Route::get('/show-user/{user}', 'HomeController@showUser');
Route::get('/show-user/{name}', 'HomeController@showUser');
/*
    برو در پوشه 
    apps/providers/RouteServiceProvider.php
    در متود بوت ، میری و بعد از متود پَرنِت
    مینویسی
    Route::bind();
    در آرگومان اولش دقیقا اسم اون متغیری که به 
    مدلت پاس دادی رو میدی به صورت ی رشته
    آرگومان دومت میشه ی کلوژر
    توضیحات خیلی زیاده و من ترجیح میدم که
    بری و جلسه ۴۵ رو دوباره ببینی
*/
