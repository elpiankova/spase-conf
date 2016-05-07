<?php
    /**
     * Created by PhpStorm.
     * User: mammut
     * Date: 07.05.16
     * Time: 13:56
     */
    Admin::model('App\Confcommittee')->title('Комітет')->display(function () {
        $display = AdminDisplay::datatables();
        $display->with();
        $display->filters([

        ]);
        $display->columns([
            Column::string('title_uk')->label('Title_uk'),
            Column::string('text_uk')->label('Text_uk'),
        ]);

        return $display;
    })->createAndEdit(function () {
        $form = AdminForm::form();
        $form->items([

            FormItem::text('place', 'Порядок відображення'),
            FormItem::columns()->columns([
                [
                    FormItem::text('title_uk', 'Title Uk'),
                    FormItem::ckeditor('text_uk', 'Text Uk'),
                ],
                [
                    FormItem::text('title_ru', 'Title Ru'),
                    FormItem::ckeditor('text_ru', 'Text Ru'),
                ],
                [
                    FormItem::text('title_en', 'Title En'),
                    FormItem::ckeditor('text_en', 'Text En'),
                ],
            ]),
        ]);

        return $form;
    });