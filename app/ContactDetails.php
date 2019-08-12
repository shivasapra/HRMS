<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactDetails extends Model
{
    protected $table = 'contact_details';

    public function employee(){
        return $this->belongsTo('App\Employee');
    }
}
