<?php

Admin::model('App\Index')->title('Головна')
    ->display(function() {
        $display=AdminDisplay::table();
        $display->with();
        $display->filters([

        ]);
        $display->columns([
            Column::string('title_uk')->label('Заголовок'),
            Column::string('heading_uk')->label('Категорії'),
            Column::string('background_title_uk')->label('Слайд'),
        ]);

        return $display;
    })->edit(function() {
        $form=AdminForm::form();
        $form->items([
            FormItem::text('title_uk', 'Заголовок Uk'),
            FormItem::text('title_ru', 'Заголовок Ru'),
            FormItem::text('title_en', 'Заголовок En'),
            FormItem::text('heading_uk', 'Категорії Uk'),
            FormItem::text('heading_ru', 'Категорії Ru'),
            FormItem::text('heading_en', 'Категорії En'),
            FormItem::text('background_title_uk', 'Заголовок на фоні Uk'),
            FormItem::text('background_title_ru', 'Заголовок на фоні Ru'),
            FormItem::text('background_title_en', 'Заголовок на фоні En'),
            FormItem::text('background_text_uk', 'Текст на фоні Uk'),
            FormItem::text('background_text_ru', 'Текст на фоні Ru'),
            FormItem::text('background_text_en', 'Текст на фоні En'),
            //		FormItem::text('menu_id', 'Menu'),
            FormItem::image('photo', 'Photo'),
            FormItem::ckeditor('text_uk', 'Текст Uk'),
            FormItem::ckeditor('text_ru', 'Текст Ru'),
            FormItem::ckeditor('text_en', 'Текст En'),
        ]);

        return $form;
    })->delete(null);