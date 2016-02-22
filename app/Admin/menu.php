<?php

Admin::menu()->label('Сайт')->icon('fa-desktop')->items(function ()
{
    Admin::menu()->label('Головна')->icon('fa-desktop')->items(function ()
    {
        Admin::menu(App\Index::class)->label('Сторінка')->icon('fa-graduation-cap');
        Admin::menu(App\User::class)->label('Рубрики')->icon('fa-user');
    });

    Admin::menu(App\User::class)->label('Архів')->icon('fa-key');

    Admin::menu()->label('Конференція')->icon('fa-desktop')->items(function ()
    {
        Admin::menu(App\User::class)->label('Налаштування')->icon('fa-key');
        Admin::menu(App\User::class)->label('Інформація')->icon('fa-graduation-cap');
        Admin::menu(App\User::class)->label('Тези')->icon('fa-user');
        Admin::menu(App\User::class)->label('Місце проведення')->icon('fa-user');
        Admin::menu(App\User::class)->label('Комітет')->icon('fa-user');
    });
});

Admin::menu()->label('Пользователи')->icon('fa-users')->items(function ()
{
    Admin::menu(App\Permit::class)->label('Права')->icon('fa-key');
    Admin::menu(App\Role::class)->label('Роли')->icon('fa-graduation-cap');
    Admin::menu(App\User::class)->label('Юзеры')->icon('fa-user');
});
