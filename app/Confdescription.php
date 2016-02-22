<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Confdescription extends Model
{
    protected $table='confdescriptions';

    public function TextTrans($text)
    {
        $locale=App::getLocale();
        $column=$text.'_'.$locale;

        return $this->{$column};
    }
}
