<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DepartmentSettings extends Model
{
    protected $table = 'department_settings';

    public function JobtitleSettings(){
        return $this->hasMany('App\JobtitleSettings');
    } 
}
