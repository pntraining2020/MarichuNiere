<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    //
    public $timestamps=true;
    protected $fillable = [
        'user_id',
        'clock_in',
        'start',
        'end',
        'clock_out',
        'total_time_worked',
        'hours_left',
        'total_breaks'
        
    ];

    protected $table = 'timers';

    public function user()
    {
        return $this->hasOne('App\Model\User' , 'id' , 'user_id');
    }

}
