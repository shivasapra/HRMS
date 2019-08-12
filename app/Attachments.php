<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachments extends Model
{   

    protected $table = 'attachments';

    public function employee(){
        return $this->belongsTo('App\Employee');
    }
}
