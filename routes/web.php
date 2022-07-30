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
Auth::routes();
/*
    old -> این خیلی بکار میاد 
    مثلا ی فرم داری پرش کردی ی جاش اشتباهه فقط 
    میای و به این اسم اون اینپوت رو میدی بعدش
    اون بعد از اینکه صفحه رفرش شد دیگه اون و پاک نمیکنه 
    و برات نگهش میداره و فقط جایی که اشتباه پر کردی رو باید
    دوباره پر کنی 

*/

