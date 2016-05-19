<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $table='user_infos';


    public
    function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    public
    function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    public
    function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public
    function spaceorganization()
    {
        return $this->belongsTo(Spaceorganization::class, 'organization_id');
    }
}
