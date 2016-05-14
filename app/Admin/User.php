<?php

Admin::model('App\User')->title('Пользователи')->display(function() {
    $display=AdminDisplay::datatables();
    $display->with();
    $display->filters([

    ]);
    $display->columns([
        Column::string('first_name')->label('Ім’я'),
        Column::string('last_name')->label('Прізвище'),
        Column::string('email')->label('Email'),
        Column::string('last_login')->label('Останній вхід'),
        Column::image('info.photo')->label('Фото'),
    ]);

    return $display;
})->createAndEdit(function() {
    $form=AdminForm::form();
    $form->items([
        FormItem::text('email', 'Email'),
        FormItem::text('first_name', 'First Name'),
        FormItem::text('last_name', 'Last Name'),
        FormItem::select('countries_id', 'Країна')->model('App\Country')->display('title_uk'),
        FormItem::select('city_id', 'Місто')->model('App\City')->display('title_uk'),
        FormItem::select('organization_id', 'Організація')->model('App\Spaceorganization')->display('title_uk'),
        FormItem::multiselect('theroles', 'Роли')->model('App\Role')->display('name'),
    ]);

    return $form;
});