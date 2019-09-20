<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeLetters extends Model
{
    protected $table = 'employee_letters';

    public function employee(){
        return $this->belongsTo('App\Employee');
    }
}
