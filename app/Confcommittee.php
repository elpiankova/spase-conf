<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Facades\App;

    class Confcommittee extends Model
    {
        protected $table = 'confcommittees';

        public
        function TextTrans($text)
        {
            $locale = App::getLocale();
            $column = $text . '_' . $locale;

            return $this->{$column};
        }
    }
