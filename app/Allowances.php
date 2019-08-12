<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Allowances extends Model
{
    protected $table = 'allowances';

    public function employee(){
        return $this->belongsTo('App\Employee');
    }
}
