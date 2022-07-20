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
Route::any('/', 'HomeController@index');
// episode35

/*
    in home controller
    $user = factory(User::class, 20)->create();
    
    config/app -> search-> faker
*/