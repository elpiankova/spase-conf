<?php
    /**
     * Created by PhpStorm.
     * User: mammut
     * Date: 12.05.16
     * Time: 17:09
     */
    Admin::model('App\Conferequest')->title('Заяви на конференцію')->display(function () {
        $display = AdminDisplay::datatables();
        $display->with();
        $display->filters([

        ]);
        $display->columns([

            Column::string('user.first_name')->label('І’мя'),
            Column::string('user.last_name')->label('Прізвище'),
            Column::string('category.title_uk')->label('Категорія'),
            Column::string('title')->label('Заголовок'),
        ]);

        return $display;
    })->createAndEdit(function () {
        $form = AdminForm::form();
        $form->items([
            FormItem::select('section_id', 'Країна')->model('App\Сategory')->display('title_uk'),
            FormItem::text('title', 'Заголовок'),
            FormItem::ckeditor('text', 'Текст'),
        ]);

        return $form;
    });