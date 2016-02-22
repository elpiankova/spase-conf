<?php

Admin::menu()->label('Сайт')->icon('fa-desktop')->items(function ()
{
    Admin::menu()->label('Головна')->icon('fa-desktop')->items(function ()
    {
        Admin::menu(App\Index::class)->label('Сторінка')->icon('fa-graduation-cap');
        Admin::menu(App\Сategory::class)->label('Категорії')->icon('fa-user');
    });

    Admin::menu(App\Archive::class)->label('Архів')->icon('fa-key');

    Admin::menu()->label('Конференція')->icon('fa-desktop')->items(function ()
    {
        Admin::menu(App\Confinfo::class)->label('Інформація')->icon('fa-graduation-cap');
        Admin::menu(App\Confabstract::class)->label('Тези')->icon('fa-user');
        Admin::menu(App\Confdescription::class)->label('Місце проведення')->icon('fa-user');
        Admin::menu(App\User::class)->label('Комітет')->icon('fa-user');
    });
});

Admin::menu()->label('Пользователи')->icon('fa-users')->items(function ()
{
    Admin::menu(App\Permit::class)->label('Права')->icon('fa-key');
    Admin::menu(App\Role::class)->label('Роли')->icon('fa-graduation-cap');
    Admin::menu(App\User::class)->label('Юзеры')->icon('fa-user');
});
