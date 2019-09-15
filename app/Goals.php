<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goals extends Model
{
    protected $table = 'goals';

    public function User(){
        return $this->belongsTo('App\User');
    }
}
