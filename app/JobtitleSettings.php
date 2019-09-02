<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobtitleSettings extends Model
{
    protected $table = 'jobtitle_settings';

    public function Department(){
        return $this->belongsTo('App\DepartmentSettings');
    } 
}
