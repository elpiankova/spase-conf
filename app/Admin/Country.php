<?php
    /**
     * Created by PhpStorm.
     * User: mammut
     * Date: 13.05.16
     * Time: 15:38
     */
    Admin::model('App\Country')->title('Організації')->display(function ()
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
            FormItem::text('title_uk', 'Текст Uk'),
            FormItem::text('title_ru', 'Текст Ru'),
            FormItem::text('title_en', 'Текст En'),
        ]);
        return $form;
    });