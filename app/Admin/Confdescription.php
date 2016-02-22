<?php

Admin::model('App\Confdescription')->title('Місце проведення')->display(function() {
    $display=AdminDisplay::datatables();
    $display->with();
    $display->filters([

    ]);
    $display->columns([
        Column::string('title_uk')->label('Заголовок'),
    ]);

    return $display;
})->createAndEdit(function() {
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
    ]);

    return $form;
});