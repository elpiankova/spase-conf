<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conferequest extends Model
{
    protected $table = 'conferequests';


    public function author()
    {
        return $this->hasMany('App\Conferauthor', 'conferequests_id');
    }
}
