<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;


class Index extends Model
{
    protected $table='indexs';

    public function TextTrans($text)
    {
        $locale=App::getLocale();
        $column=$text.'_'.$locale;

        return $this->{$column};
    }
}
