<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reports extends Model
{
    protected $table = 'reports';

    public function employee(){
        return $this->belongsTo('App\Employee');
    }
}
