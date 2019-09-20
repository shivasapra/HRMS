<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedbacks extends Model
{
    protected $table = 'feedbacks';

    public function user(){
        return $this->belongsTo('App\User');
    }
}
