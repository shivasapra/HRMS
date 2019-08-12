<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobDetails extends Model
{
    protected $table = 'job_details';

    public function employee(){
        return $this->belongsTo('App\Employee');
    }
}
