<?php

Admin::menu()->label('Сайт')->icon('fa-desktop')->items(function ()
{
    Admin::menu()->label('Головна')->icon('fa-desktop')->items(function ()
    {
        Admin::menu(App\Index::class)->label('Сторінка')->icon('fa-graduation-cap');
        Admin::menu(App\Сategory::class)->label('Категорії')->icon('fa-user');
        Admin::menu(App\Spaceorganization::class)->label('Організації')->icon('fa-university');
        Admin::menu(App\Country::class)->label('Країни')->icon('fa-globe');
        Admin::menu(App\City::class)->label('Міста')->icon('fa-map');
    });

    Admin::menu(App\Archive::class)->label('Архів')->icon('fa-archive');

    Admin::menu()->label('Конференція')->icon('fa-desktop')->items(function ()
    {
        Admin::menu(App\Confinfo::class)->label('Інформація')->icon('fa-info');
        Admin::menu(App\Confabstract::class)->label('Тези')->icon('fa-graduation-cap');
        Admin::menu(App\Confdescription::class)->label('Місце проведення')->icon('fa-map-marker');
        Admin::menu(App\Confcommittee::class)->label('Комітет')->icon('fa-user-secret');
    });
});

Admin::menu()->label('Пользователи')->icon('fa-users')->items(function ()
{
    Admin::menu(App\Permit::class)->label('Права')->icon('fa-key');
    Admin::menu(App\Role::class)->label('Роли')->icon('fa-graduation-cap');
    Admin::menu(App\User::class)->label('Юзеры')->icon('fa-user');
});

Admin::menu()->label('Конференція')->icon('fa-users')->items(function ()
{
    Admin::menu(App\Conferequest::class)->label('Заявка')->icon('fa-key');
    Admin::menu(App\Role::class)->label('Роли')->icon('fa-graduation-cap');
    Admin::menu(App\User::class)->label('Юзеры')->icon('fa-user');
});
