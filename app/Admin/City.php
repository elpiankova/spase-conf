<?php
    /**
     * Created by PhpStorm.
     * User: mammut
     * Date: 13.05.16
     * Time: 15:40
     */
    Admin::model('App\City')->title('Міста')->display(function ()
    {
        $display = AdminDisplay::datatables();
        $display->with();
        $display->filters([

        ]);
        $display->columns([
            Column::string('id')->label('ID'),
            Column::string('title_uk')->label('Текст'),
        ]);
        return $display;
    })->createAndEdit(function ()
    {
        $form = AdminForm::form();
        $form->items([
            FormItem::select('countries_id', 'Країна')->model('App\Country')->display('title_uk'),
            FormItem::text('title_uk', 'Текст Uk'),
            FormItem::text('title_ru', 'Текст Ru'),
            FormItem::text('title_en', 'Текст En'),
        ]);
        return $form;
    });