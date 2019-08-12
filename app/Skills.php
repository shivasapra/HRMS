<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{   
    protected $table = 'skills';
    
    public function employee(){
        return $this->belongsTo('App\Employee');
    }
}
