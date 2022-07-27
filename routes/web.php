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

// episode56
/*
    mini project part 1
*/

// Route::resource('post', 'PostController');
// episode57
/*
    ی سری کار های مقدماتی 
    اولین کار سیستم روته که با استفاده از ریسورس درستش کردیم
    بعد مایگریشن هارو باید درست کنیم که قبلا درست کردیم
    بعد از اون نوبت مدل ها و کنترلر ها
    php artisan make:controller PostController --resource
    من اینجا کنترلر پست رو ساختم
    حالا نوبت مدله
    php artisan make:model Post
    اول چک کن ببین اصن کنترلرت به روت وصل شده یا نه 
    بعدش برو متود بنویس
    
*/

// episode58
/*
    متاسفانه زودتر از جلسه ی قبل نگاهش کردم
    در این جلسه ی تمرینم داد آقای خسروجردی عزیز که باید انجامش بدم
    در این جلسه قالب هارو وصل کردیم به روت و لینک هارو دادیم
    خب تمرین رو انجام دادم ، خیلی خوشحالم که تونستم
    
*/

// episode59
/*
    how to send data using redirect with laravel
    redirect()->route('address')->with('sessionName', 'value');

    Session::get('sessionName');
    
*/

// episode60
/*
    part 5 of mini project
    
*/

// episode61
Route::get('/', 'HomeController@index');
/*
    میتونی به صورت دستی اسم کلید خارجی یا فارین کی رو بهش 
    بدی تا ی وقت ارور نده بهت 

    return $this->belongsTo('App\User', 'foreignKeyName');
    در آرگومان سوم اون کلید دیگه که در جدولیه که
    میخوای باهاش ارتباط بگیری رو بهش بده
    به صورت پیشفرض فکر میکنه که آیدیه
    
    return $this->belongsTo('App\User', 'foreignKeyName', 'otherKey');

    این جلسه خیلی مهم بود و باید اگر یادت رفته دوباره فیلماش رو ببینی
*/