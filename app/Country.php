<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function posts()
    {
        return $this->hasManyThrough('App\Post', 'App\User',);
        // return $this->hasManyThrough(
        //     'مدل نهایی ', 
        //     'مدل واسطه', 
        //     'کلید خارجی در جدول واسطه', 
        //      'کلید خارجی در جدول نهایی',
        //      'کلید داخلی در جدول',
        //      'لوکال کی جدولی که داری ازش استفاده میکنی',
        //      'لوکال کی جدول واسطه',
        // );
    }
}
