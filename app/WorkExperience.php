<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{   
    protected $table = 'work_experiences';

    public function employee(){
        return $this->belongsTo('App\Employee');
    }
}
