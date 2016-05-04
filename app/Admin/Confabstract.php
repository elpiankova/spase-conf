<?php

Admin::model('App\Confabstract')->title('Тези')->display(function() {
    $display=AdminDisplay::datatables();
    $display->with();
    $display->filters([

    ]);
    $display->columns([
        Column::string('text_uk')->label('Text_uk'),
    ]);

    return $display;
})->edit(function() {
    $form=AdminForm::form();
    $form->items([
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
        FormItem::columns()->columns([
            [
                FormItem::image('photo', 'Photo'),
            ],
            [
                FormItem::file('file', 'File'),
            ],
        ]),


    ]);

    return $form;
});