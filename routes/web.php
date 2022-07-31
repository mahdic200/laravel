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
Auth::routes();

Route::get('logout', 'Auth\LoginController@logout');

Route::get('/', 'HomeController@index');

Route::resource('post', 'PostController')->middleware('auth.basic');

Route::get('/home', 'HomeController@index')->name('home');

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

// episode90
/*
    practice 4
    redirect admin to panel
*/
// روش آقای خسروجردی
Route::get('/admin', 'AdminController@index')->middleware('auth', 'CheckAdmin');

// episode91
/*
    حل تمرین
    اصن منظورش اونی که فکر میکردم نبود 
    فقط میخواست که ادمین بتونه وارد پنلش بشه 
    چیزی که من فکر میکردم اشتباه بود
*/