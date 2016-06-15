<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conferauthor extends Model
{
    protected $table = 'conferauthors';

    public
    function requestName()
    {
        $name_parts = explode('.', $this->name);
        if(count($name_parts) == 3){
            $fist_initial = mb_strtoupper(trim($name_parts[0]));
            $second_initial = mb_strtoupper(trim($name_parts[1]));
            $surname = $name_parts[2];
            $formatted_name = $fist_initial.'.'.$second_initial.'. '.$surname;
        }
        else
            $formatted_name = $this->name;

        return $formatted_name;
    }
}
