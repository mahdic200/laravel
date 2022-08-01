<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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


// episode86
/*
    old -> این خیلی بکار میاد
    مثلا ی فرم داری پرش کردی ی جاش اشتباهه فقط
    میای و به این اسم اون اینپوت رو میدی بعدش
    اون بعد از اینکه صفحه رفرش شد دیگه اون و پاک نمیکنه
    و برات نگهش میداره و فقط جایی که اشتباه پر کردی رو باید
    دوباره پر کنی

*/

// episode87
/*
    encrypt and hash
*/

// episode88
/*
    Auth:route([
        'reset' => false, عوض کردن پسورد ممنوع میشه
        'verify' => true, تایید ایمیل
        'register' => false, ثبت نام ممنوع
    ])
    auth()->logoutOtherDevices('passwordthisuser');
    چیزی بسیار مفید
    این کاربری که الان لاگ این شده رو میاد و
    بقیه لاگ این هاش رو از دستگاه های دیگه پاک میکنه
    یعنی فقط تو همین دستگاه باید لاگ این باشی
    باید برای استفاده بیای و میدل ورش رو فعال کنی
    app/http/kernel.php
    بری و میدل ورش رو از کامنت در بیاری
    AuthenticateSession::class

    auth()->once(), auth()->loginUsingId(), auth()->login($user), auth()->attempt, auth()->logoutOtherDevices('passwordthisuser'), Auth:route

*/

// episode89
/*
    guard in laravel
*/

// episode90 , 91
/*
    تمرین چهار و حلش
    Auth::check()
*/

// episode92 and 93
/*
    ی تمرین داده آقای خسروجردی
    امروز فلش اوبونتوم سوخت
    $guard,
*/


// episode94
/*
    nested namespace, overwriting methods in loginController in Admin namespace
*/

// episode95
/*
    making adminController
    php artisan make:controller Admin/HomeController
    میدونستی میتونی گارد پیشفرض میدل ور هارو اینطوری تغییر بدی ؟ 
    $this->middleware('auth:<guardName>');
    مثلا
    $this->middleware('auth:admin');
    
    changing returned redirect in redirectifauthenticated.php
    
        if ($guard == 'admin')
        {
            return redirect()->route('admin.home');
        }
        else
        {
        return redirect('/home');
        }

    Handler.php

    unauthenticated
    
*/

// episode96
/*
    making admin pages,
    and making admin folder in views
*/

// episode97
/*
    php artisan make:seeder AdminsTableSeeder
    bcrypt function makes passwords encrypted
    seeding AdminsTable
*/
Auth::routes();

Route::get('logout', 'Auth\LoginController@logout');

Route::get('/', 'HomeController@index');

Route::namespace('Admin')->prefix('admin')->group(function() {
    
    Route::get('/', 'HomeController@index')->name('admin.home');
    
    Route::namespace('Auth')->group(function() {

        Route::get('/login', 'LoginController@showLoginForm')->name('admin.login');

        Route::post('/login', 'LoginController@login');

        Route::post('/logout', 'LoginController@login')->name('admin.logout');
    });
});

Route::resource('post', 'PostController')->middleware('auth.basic');

Route::get('/home', 'HomeController@index')->name('home');