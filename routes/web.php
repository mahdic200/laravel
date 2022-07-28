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
// Route::get('/', 'HomeController@index');
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

// episode62
// Route::get('/', 'HomeController@index');
/*
    one to many relationShip
    has method
    associate and dissociate
    
    این الان به صورت یک پراپرتی استفاده شده
    $post->comments
    اگر بخوای ی سری بلا سرش بیاری ،مثلا بخوای شرط بزاری 
    چیارو برات بیاره باید به صورت متود ازش استفاده کنی 
    $post->comments()
    اینطوری
    

    خب از خودم راضیم ، تمرین این جلسه رو هم انجام دادم 
    این یعنی به چیزایی که یاد گرفتم مسلط هستم

*/

// episode63
// Route::get('/', 'HomeController@index');
/*
    hasOneThrough($arg1, $arg2)
    $arg1 -> مدلی که در نهایت باید بهش برسی
    $arg2 -> مدلی که اینجا واسطه هست
    
*/


// episode64
// Route::get('/', 'HomeController@index');
/*

    // return $this->hasManyThrough(
    //     'مدل نهایی ', 
    //     'مدل واسطه', 
    //     'کلید خارجی در جدول واسطه', 
    //      'کلید خارجی در جدول نهایی',
    //      'کلید داخلی در جدول',
    //      'لوکال کی جدولی که داری ازش استفاده میکنی',
    //      'لوکال کی جدول واسطه',
    // );
*/


// episode65
// Route::get('/', 'HomeController@index');
/*
    many to many relationship
    pivot table in laravel
    باید دقت کنی اسم جدول واسطه رو که میخواد
    ارتباط برقرار کنه ترکیبی از اسم دو تاجدولی بزنی که
    اسم دوتا جدول به صورت بک باش ه نه جمع
    بعدش باید بینشون آندر لاین بزاری
    بعد از اون هم باید حواست باشه کلا به هیچی نیاز نداره 
    جز فارن کی ، کلا توش کلید خارجیه
    :| چیزای دیگه هم میتونی بزاری ولی مریضی مگه
     
*/

// episode66
Route::get('/', 'HomeController@index');
/*
    belongs to many function
    $post = Post::find(1);
    $post->tags()->attach(1);
    میاد و به پست شماره یک تگ شماره یک رو میچسبونه
    برعکسشم داریم
    detach

    sync and attach
    سینک همه قبلیا رو پاک میکنه
    اتچ اضافه میکنه
    میتونی به اینا آرایه هم پاس بدی
    

    حالا اگر در این حین ، اومدی و یک ستون به جدول پیوت
    اضافه کردی ، برای اینکه موقع اینکار 
    dd($post->tags)
    اون ستون هم برات بیاره ، باید بری در مدلش
    و با تابع 
    withPivot
    بهش بگی که بیا و این رو برای من با خودت ببر
    return $this->belongsToMany('App\Tag')->withPivot('اسم اون ستون جدیده');
    
    خب حالا برای اینکه بتونی ازش دیدی بگیری باید بیای و
    اینطوری صداش بزنی ، حواست هست که تگز یعنی چند تا تگ 
    پس تک نیست !‌ این یعنی باید بیای و ی دونه رو برداری 
    بعدش
    dd($posts->tags->first()->pivote->"اسم اون ستونه که اضافش کردی");

    اگه خواستی تاریخ اینارم بفرستی از دستور
    withTimestamps()
    توی مدلت استفاده میکنی و تامام
    

*/