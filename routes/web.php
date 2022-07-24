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
// episode28
// finally DataBase in laravel
/*
    DataBase file is in config/database.php
    you can edit database information in .env file

    database tables are in database/migrations
    by using command -> php artisan migrate
    to undo this action you should use command
    -> php artisan migrate:rollback
*/

// episode29
/* 
    data types in laravel
    database tables are in database/migrations
    
*/


//episode30
/*
for making table
    php artisan make:migration <migrationName> --create=<tableName>
for changing a table columns 
    php artisan make:migration <migrationName> --table=<tableName>
example:
    php artisan make:migration add_images_to_articles-table --table=articles
    خب ی کم فارسی بنویسم o(*￣︶￣*)o
    میتونی بعد از اینکه توی اون فایل نوشتی چی میخوای اضافه کنی 
    به ستون های جدول ، حتی میتونی بگی کجا میخوای اضافه کنی 
    $table->text('images')->after('description');
    
*/


// episode31
/*
shows status of migrations
    php artisan migrate:status
resets (delete) all tables in database
    php artisan migrate:reset
first (run "down" method in migration file) delete's all tables in databse and 
then creat's all of them according to your migrations
    php artisan migrate:refresh
first delete's all tables (without assuming down method
, it does not matter what you have written in down method) in databse and 
then creat's all of them according to your migrations
    php artisan migrate:fresh

rollback's (call's down methods from migration files
which is related to steps) two last steps in database 
    php artisan migrate:rollback --step=2
*/



// episode32
/*
    
*/

// episode33
/*
    تغییر دادن جدول ها در لاراول
    برای تغییر دادن باید این پکیج رو اضافه کنی 
    composer require doctrine/dbal:^2.10.0 -w

// برای تغییر نوع ی ستون اینطوری عمل میکنیم
// نوع جدیدی که میخوایم رو مینویسیم و آخرش ی 
// change()
// میزنیم
    $table->string('address', 255)->change();
// برای پاک کردن چند ستون از آرایه استفاده میکنیم
    $table->dropColumn(['address', 'image']);
    $table->renameColumn('avatar', 'image');

// تغییر دادن تایپ ها محدودیت داره و هرچیزی رو نمیشه تغییر داد 
// مث ای نام
// ENUM
*/

// episode34
/*
    یک سری اطلاعات تستی میزاره تو دیتا بیس که بتونی آزمایش انجام بدی روی دیتابیست
    seeder
    php artisan make:seeder <seederName>

// بهتره قبل از اینکه فایل سیدر رو اجرا کنی بیای و این وبزنی 
// تا اون فایل اتو لود کامپوزر بازسازی بشه
    composer dump-autoload
    
    
// برای اجرای همه سیدر ها
    php artisan db:seed
// برای اجرای یک سیدر مشخص
    php artisan db:seed --class=UsersTableSeeder
*/

// Route::any('/', 'HomeController@index');
// episode35

/*
    in home controller
    $user = factory(User::class, 20)->create();
    
    config/app -> search-> faker
*/


// episode36
/*
    making a new factory

    php artisan make:factory <Name>

    making a new model
    نباید از حروف جمع استفاده بکنی و حرف اولشم باید بزرگ باشه
    

    php artisan make:model <Name>
*/

// episode37
/*
    sql of selecting in laravel

    
    in homeController
    $users = DB::select();
    $users = DB::select("SELECT * FROM users WHERE id = :id;", ['id' => 12]);

    
    $users = DB::insert("INSERT INTO users (name, email, password) values (?, ?, ?);", ['mahdi', 'e@gmail.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi']);

    $users = DB::update("UPDATE users SET name = ? WHERE id = ?;", ['ali', 41]);


*/

// episode38

/*
    Collections and fluent codes
    query filder
    selecting with methods

    $users = DB::table('users')->where('name', 'بانویه وکیلی')->where('email', 'abbas95@example.net')->get();

    $users = DB::table('users')->get();


*/

//episode39

/*
    برای پیدا کردن یک مقدار های مشخصی که در بازه ایی قرار دارند
    whereBetween('target', [low, high]);
    دقیقا نقیض این بالایی رو اجرا میکنه
    whereNotBetween('target', [low, high]);

    این هم مث وربیتوینه اما تفاوتش اینه که دقیقا چیز هایی رو پیدا میکنه که 
    در آرایه داده شده بهش باشه
    whereIn('target', [value1, value2, value3, ...]);
    حالا دقیقا برعکس بالایی رو هم داریم
    whereNotIn('target', [value1, value2, value3, ...]);

    دستور بعدی خیلی پرکاربرده
    یک ستون در جدول رو میگیره ازت و رکورد هایی که اون قسمت رو خالی 
    دارند برات میاره
    whereNull('target');
    دقیقا برعکس همین رو هم داریم
    wherNotNull('target');

    زیاد استفاده نمیشه
    whereDate('target', dateValue);
    
    این دستور زیاد استفاده میشه
    whereColumn('target1', operator(<=>), 'target1');

    از دستورات وِر پیچیده و تو درتو هم میشه استفاده کرد
    $users = DB::table('users')->where('id', 1)->orWhere('id' , 2)->where(function($query) {
            $query->where('name', 'mahdi')->orWhere('email', 'email@gmail.com');
        })->get();
*/

// episode40
/*
    joins in laravel
    $users = DB::table('posts')->join('tableName', 'relationedColumnInSecondTable', 'firstTableRelationedColumn')->get();
    leftJoin and rightJoin and crossJoin
    اگر نیاز بشه آقای خسروجردی میگه
    حالا مبحث اسکیوال های پیچیده و تو در تو


    $first = DB::table('users')->whereNull('updated_at');
    $users = DB::table('users')->whereNull('created_at')->union($first)->get();
    
    دقت کن اونی که داری آنینش میکنی نباید گت داشته باشه 
    باید به صورت کوئری باشه

    orderby
    $users = DB::table('users')->orderBy('')->get();
    latest -> first

    کار همون لیمیت رو انجام میده 
    take('number')
    اون تعدادی رو که بهش میدی رد میکنه 
    skip('number')

    you can use limit instead of take 
    and also you can use offset instead of skip

    group by and having
    هوینگ دقیقا مث وِر عمل میکنه و تفاوت زیادی ندارن
    
    برای اینکه لاراول کص گیر نده به 
    groupBy
    میری تو این مسیر
    /config/database.php -> search -> mysql
    and change strict to -> strict => false

    این کار اصولی نیست و امکان ایجاد حفره امنیتی برای 
    سایت وجود داره
    با دستور
    DB::raw("sql");
    میتونی اسکیوال خام بنویسی
*/


// episode41
/*
    ی دستور کاربردی
    when

    first -> این دستور میاد و اولین چیزی که تو جدوله 
    برات به صورت یک آرایه میاره
    get -> این دستور به صورت یک کالکشن برات هرچی داری رو بسته 
    به اس کیو الت میاره

    برای پیشگیری از ارور های لاراول میایم و بجای فرست از
    firstOrFail()
    استفاده میکنیم

    برای دسترسی به یک فیلد چیزی که بدست آوردی
    همونطوری اسم همون ستون رو مینویسی 
    به صورت اَتریبیوت  ، نه به صورت متود
    مثال:
    $users = DB::table('users')->first()->id;
    دقت کن که رکوردی که میگیری باید به صورت تکی باشه ها
    واگرنه بدبخت از کجا بدونه تو آیدی یا مثلا فیلد کدوم رکورد رو میخوای

    بعضی وقت ها هم بجای اینکه اون آیتم هارو بخوای 
    از دیتابیست ،تعدادشونو میخوای باید بجای گِت از 
    count
    استفاده کنی 
    $users = DB::table('users')->where('id', 1)->orWhere('id', 2)->count();


    min('target') -> returns minimum value according to
    its arqument in table

    max('target') -> returns maximum value according to
    its arqument in table

    returns the summation of its argument in the 
    selected table
        sum()
    
        returns the avergae of its argument in the 
    selected table
    avg()


*/
// episode42

Route::any('/', 'HomeController@index');
/*
    CRUD in laravel
    insert([
        'colNmae' => 'value',
        .
        .
        .
    ])

    بعضی وقتا که میخوای ی چیزی رو تو جدول وارد کنی آیدیشم بگیری
    insertGetId([
        'colNmae' => 'value',
        .
        .
        .
    ])

    دستورات آپدیت
    
    $user = DB::table('users')->where('id', 1)->update([
        'name' => 'hassan'
    ]);

    update or insert

        $user = DB::table('users')->updateOrInsert(
            [parameters that expected to be found in db],
            [pararmeters that should be updated , 
            if first array was not exists , all values will insert to 
            db]
        );
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