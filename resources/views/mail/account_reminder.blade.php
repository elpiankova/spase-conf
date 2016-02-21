<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 21.02.16
 * Time: 18:51
 */ ?>
Для создания нового пароля пройдите по <a href="{{ URL::to("reset/{$sentuser->getUserId()}/{$code}") }}">ссылке</a>
