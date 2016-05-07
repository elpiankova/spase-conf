<?php

    Admin::model('App\Сategory')->title('Категорії')->display(function () {
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
                    FormItem::textarea('text_uk', 'Text Uk'),
                ],
                [
                    FormItem::text('title_ru', 'Title Ru'),
                    FormItem::textarea('text_ru', 'Text Ru'),
                ],
                [
                    FormItem::text('title_en', 'Title En'),
                    FormItem::textarea('text_en', 'Text En'),
                ],
            ]),
            FormItem::image('photo', 'Photo'),
        ]);

        return $form;
    });