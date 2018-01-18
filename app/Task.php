<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    /*
        public static function incompleted()
        {
            return static::where('completed',0)->get();  // this means that default return record(s) has completed=0 .
                                                        // >php artisan tinker
                                                        // >App\Task::incompleted(); //return all record completed=0 .
        }

    */
    public  function scopeIncompleted($query)  //call it in cmd like==> App\task::incompleted()->get();
    {
        return $query->where('completed',0);  // when return created task(s) has completed=0 for a month ago.
        // >php artisan tinker
        // >App\Task::incompleted(); //return all record completed=0 .
    }
}
