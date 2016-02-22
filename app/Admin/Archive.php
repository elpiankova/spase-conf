<?php

Admin::model('App\Archive')->title('Архів')->display(function() {
    $display=AdminDisplay::datatables();
    $display->with();
    $display->filters([

    ]);
    $display->columns([

    ]);

    return $display;
})->createAndEdit(function() {
    $form=AdminForm::form();
    $form->items([
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