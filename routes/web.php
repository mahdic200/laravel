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
// Route::get('/show-user/{name}', 'HomeController@showUser');
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


// episode46
// Route::any('/', 'HomeController@index');
/*
    جلسه جدید
    verifies the name of table
    protected $table = 'my_posts';
    این جلسه درمورد تنظیمات دیتابیس در کنترلر هست

    selects all records -> User::all();
*/

//episode47
/*
    fresh
    یک نمونه جدید میسازه و میاره
    refresh
    همون نمونه قبلی رو ریلود میکنه
    find([id1, id2, id3, ...])
    findOrFail()
*/

// episode48
// Route::get('/', 'HomeController@index');
/*
    دیگه حال جزوه نویسی ندارم ،‌کون لقت
    برو فیلم ببین پاره شی
*/

// episode49
// Route::get('/', 'HomeController@index');
/*
    دستور آپدیت
*/

//episode50
// Route::get('/', 'HomeController@index');
/*
    دستور دلیت و ی چیزای دیگه

    // $post = Post::find('171');
    // $post->delete();
    destroy method
    with trash
    only trashed
    restore
    forceDelete
*/

// episode51
// Route::get('/', 'HomeController@index');
/*
    fillable vars
    $fillable -> اون چیز هایی که توی جدول قراره توسط کاربر پر بشن رو 
    میگیره و اجازه میده که وارد کنی 

    $guarded -> به اسمش خوب دقت کن که اشتباه ننویسیش
    این میاد برعکس بالایی دقیقا اونهایی رو که قرار نیست پر بشن رو 
    به سیستم میشناسونه

    معمولا از دومی بیشتر استفاده میکنن
    *هیچوقت هردوتا رو باهم استفاده نکن*
*/

// episode52
Route::get('/', 'HomeController@index');
/*
    $post = Post::where('status', 1)->get();
    
    ی تابع تعریف میکنی تو کنترلر پست ها مثلا
    اولش مینویسی 
    scope
    بعدش اسمی که میخوای رو با حرف اول بزرگ مینویسی
    scopeActive()
*/

// episode53
// Route::get('/', 'HomeController@index');
/*
    global scopes
    در پوشه ی اَپ ی پوشه درست کن به نام اسکوپز 
    بعد ی فایلی درست کن که کارهای مربوط به اسکوپ تورو انجام بده
    و حالا اگر از این روش رفتی مث پایین تر که نوشتم ، ی تابع مینویسی بوت
    این خط و مینویسی 
    parent::boot();
    حالا ی آبجکت جدید از کلاسی که ساختی رو بزار توش تا اجرا بشه
    static::addGlobalScope('static', new StatusScope);
    در نهایت آقای خسروجردی ی روش ساده گفت برای اینکه بیایم و
    گلوبال اسکوپ ها استفاده کنیم 
    میریم توی همون مدلی که میخوایم ی تابع بوت میسازیم
    یوز بیلدر رو هم انجام میدیم
    بعدش اینا رو مینویسیم
    parent::boot();
    static::addGlobalScope('status', function(Builder $builder) {
        $builder->where('status', 1);
    });
*/

// episode54
/*
    accessor and mutators
    برو حتما اگه یادت رفته فیلم و نگا کن
    ولی ی چی میگم ،‌اگر متغیر ولیو رو به ی اکسسور پاس دادی 
    دیگه از 
    $this->'column name'
    استفاده نکن باشه ؟
    example: 
    getFirstNameAttribute($value){
        return $value
    }

*/