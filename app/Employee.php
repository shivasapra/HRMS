<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function ContactDetails(){
        return $this->hasOne('App\ContactDetails');
    }

    public function JobDetails(){
        return $this->hasOne('App\JobDetails');
    }

    public function Skills(){
        return $this->hasMany('App\Skills');
    }

    public function Attachments(){
        return $this->hasMany('App\Attachments');
    }

    public function WorkExperience(){
        return $this->hasMany('App\WorkExperience');
    }

    public function Services(){
        return $this->hasMany('App\Services');
    }

    public function Allowances(){
        return $this->hasMany('App\Allowances');
    }

    public function Leaves(){
        return $this->hasMany('App\Leaves');
    }

    public function Reports(){
        return $this->hasMany('App\Reports');
    }
    public function EmployeeLetters(){
        return $this->hasMany('App\EmployeeLetters');
    }
}
