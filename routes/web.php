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
// Route::get('/', 'HomeController@index');
// Route::resource('post', 'PostController');
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

// episode80
// Route::get('/', 'HomeController@index');
// Route::resource('post', 'PostController');
// Route::resource('product', 'ProductController');
/*
    نوشتن ی تست 
    php artisan make:test <Name> ...
    /tests/Unit/
    خب ی تمرین باید بنویسم که دارم مینویسم
    اسمش پروداکته
    موارد مهم قانون های سند لاراول برای اعتبار سنجی
    array <
    alpha <
    between <
    confirmed < نفهمیدم
    date < نفهمیدم
    diffrent < 
    digits < 
    digits between <
    file < ***
    exists < **
    filled < 
    greather than < 
    in < **
    in array < 
    integer < combine it with numeric
    json <
    less than <
    max < 
    mimetype < **
    min <
    not in <
    not regex <
    nullable < 
    numeric < 
    regular expression < 
    required < 
    required if <
    required unless <
    required with < **
    required withAll <
    required withOut All < 
    size < **
    sometimes < **
    starts with < 
    string < 
    timezone < 
    unique < ****
    url < 


*/

// episode81
// Route::get('/', 'HomeController@index');
/*
    php artisan make:auth
*/

// episode82
// Route::get('/', 'HomeController@index');
/*
    vendor/laravel/framework/src/illuminate/Foundaction/Auth/AuthenticatesUsers.php
*/


// episode83
// Route::get('/', 'HomeController@index');
/*
    اگه بک اسلش قبلش بزاری نیاز نیست یوزش کنی 
    \Auth
    هرکلاسی رو
    @auth
    هرچی که بنویسی وقتی کاربر لاگ این باشه نمایش داده میشه
    @guest
    هرچی که کاربرای مهمان باید ببینن
*/
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// episode84
/*
    making our middlewares
    php artisan make:middleware <Name>
    app/http/middleware 
    تحقیق درباره دیزاین پترنی که میدلور رو باهاش درست میکنیم ؟
    
*/