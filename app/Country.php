<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Country extends Model
{
    protected $table = 'countries';

    public function cities()
    {
        return $this->hasMany('App\City', 'countries_id');
    }

    public function оrganizations()
    {
        return $this->hasMany('App\Оrganization', 'countries_id');
    }

    public function TextTrans($text)
    {
        $locale = App::getLocale();
        $column = $text . '_' . $locale;

        return $this->{$column};
    }
}
