<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Archive extends Model
{
    protected $table='archives';

    public
    function TextTrans($text)
    {
        $locale = App::getLocale();
        $column = $text . '_' . $locale;

        return $this->{$column};
    }
}
