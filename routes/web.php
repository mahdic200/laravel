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
// Route::get('/', 'HomeController@index');
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
// Route::resource('post', 'PostController');
/*
    $request->path() -> مسیری که در اون هستی رو نشونت میده
    user input , $request's methods
*/

// episode76
// Route::resource('post', 'PostController');
/*
    file , move, file()->isvalid, hasFile('name'), $request->file('image')->extension, file('image')->getMimeType(), Str::random(10), time(), public_path(), move(public_path('uploads'), $fileName),

    file('name')->extension() -> پسوند فایل ارسالی رو برمیگردونه
*/

// episode77
// Route::get('/', 'HomeController@index');
// Route::resource('post', 'PostController');
/*
    validation, Validator facades, Validator::make validator::make rules
*/

// episode78
// Route::get('/', 'HomeController@index');
// Route::resource('post', 'PostController');
/*
    end of episode78 making our own validations rule message and changing 
    validation language to persian\farsi and making, making attributes
    ساخت قوانین اعتبار سنجی شخصی خودمون
    php artisan make:rule <ruleName>
    /app/rules/ -> در اینجا ساخته میشه
*/

// episode79
Route::get('/', 'HomeController@index');
Route::resource('post', 'PostController');
/*
    میتونی برای هرقسمتی که داری اعتبارسنجی میکنی ی فایل جدا بنویسی
    ی فرم ریکوئست
    php artisan make:request <requestName>
    app/http/Request
    بهتره که آخر اسمش ی ریکوئست هم بزاری
    و اینطوری ازش استفاده کن 
    public function store(StorePostRequest $request)
    توی کنترلر پست بجا اینکه تو متود استور 
    بیای و ی نمونه از ریکوئست بسازی 
    از اون ریکوئست آماده ات بساز که تو پوشه
    app/http/Request
    ساختی
    بهترین فصلی که داشتم این بود ، فوق العاده بود ،‌حال کردم 
*/