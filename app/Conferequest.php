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
    function reqestUser($id)
    {
        if ($user = User::where('id', $id)->first()) {
            $first_name = mb_substr(mb_strtoupper($user->first_name), 0, 1,'utf-8');
            $middle_name = mb_substr(mb_strtoupper($user->middle_name), 0, 1,'utf-8');
            $last_name = ucfirst($user->middle_name);
            $name = $first_name.'. '.$middle_name.'. '.$last_name;
            return $name;
        }
        return 'Немає користувача';
    }
    public
    function emailUser($id)
    {
        if ($user = User::where('id', $id)->first()) {
            return $user->email;
        }
        return 'Немає користувача';
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
