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
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    public function category()
    {
        return $this->belongsTo('App\Сategory', 'section_id');
    }
}
