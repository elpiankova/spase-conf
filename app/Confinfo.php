<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Confinfo extends Model
{
    protected $table='confinfos';

    public function TextTrans($text)
    {
        $locale=App::getLocale();
        $column=$text.'_'.$locale;

        return $this->{$column};
    }
}
