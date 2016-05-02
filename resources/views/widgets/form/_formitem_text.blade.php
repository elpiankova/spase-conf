<?php
    /**
     * Created by PhpStorm.
     * User: mammut
     * Date: 21.02.16
     * Time: 16:37
     */ ?>
<?php if (!isset($value)) $value = null ?>
<div class="{!! $errors->has($name) ? 'has-error' : null !!} top-margin">
    <label for="{!! $name !!}">{{ $title }}</label>
    {!! Form::text($name, $value, array('placeholder' =>  $placeholder, 'class'=>'form-control text_form')) !!}
    <p class="help-block">{!! $errors->first($name) !!}</p>
</div>