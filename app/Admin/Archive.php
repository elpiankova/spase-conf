<?php

Admin::model('App\Archive')->title('Архів')->display(function() {
    $display=AdminDisplay::datatables();
    $display->with();
    $display->filters([

    ]);
    $display->columns([
        Column::string('title_uk')->label('Title_uk'),
    ]);

    return $display;
})->createAndEdit(function() {
    $form=AdminForm::form();
    $form->items([
        FormItem::columns()->columns([
            [
                FormItem::text('title_uk', 'Заголовок UK'),
            ],
            [
                FormItem::text('title_ru', 'Заголовок RU'),
            ],
            [
                FormItem::text('title_en', 'Заголовок EN'),
            ],
        ]),
        FormItem::columns()->columns([
            [
                FormItem::image('photo_thesis', 'Фото тез'),
                FormItem::file('thesis', 'Тези'),
            ],
            [
                FormItem::image('photo_img', 'Зображення фотографій'),
                FormItem::file('img', 'Фотографії'),
            ],
        ]),
    ]);

    return $form;
});