<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 21.02.16
 * Time: 18:51
 */ ?>
Для активации аккаунта пройдите по <a href="{{ URL::to("activate/{$sentuser->getUserId()}/{$code}") }}">ссылке</a>