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

    public
    function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public
    function user_info()
    {
        return $this->belongsTo(UserInfo::class, 'user_id', 'user_id');
    }
    public
    function section()
    {
        return $this->belongsTo(Сategory::class, 'section_id');
    }
}
