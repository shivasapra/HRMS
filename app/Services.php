<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $table = 'services';

    public function employee(){
        return $this->belongsTo('App\Employee');
    }
}
