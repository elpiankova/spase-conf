<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Facades\App;

    class Spaceorganization extends Model
    {
        protected $table = 'spaceorganizations';

        public function country()
        {
            return $this->belongsTo(Country::class, 'countries_id');
        }

        public function TextTrans($text)
        {
            $locale=App::getLocale();
            $column=$text.'_'.$locale;

            return $this->{$column};
        }
    }
