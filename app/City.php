<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class City extends Model
{
    protected $table = 'cities';

    public function TextTrans($text)
    {
        $locale=App::getLocale();
        $column=$text.'_'.$locale;

        return $this->{$column};
    }

    public
    function country()
    {
        return $this->belongsTo(Country::class, 'countries_id');
    }

}
