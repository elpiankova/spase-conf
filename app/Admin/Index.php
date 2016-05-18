<?php

    use App\Index;
    use SleepingOwl\Admin\Model\ModelConfiguration;

    AdminSection::registerModel(Index::class, function (ModelConfiguration $model) {
        $model->setTitle('Головна');

        // Display
        $model->onDisplay(function () {
            return AdminDisplay::table()->setApply(function($query) {
                $query->orderBy('updated_at', 'desc');
            })->setColumns([
                AdminColumn::link('title_uk')->setLabel('Заголовок'),
            ])->paginate(5);
        });

        // Create And Edit
        $model->onCreateAndEdit(function() {
            $form = AdminForm::form()->setItems([
                AdminFormElement::text('title_uk', 'Заголовок Uk'),
                AdminFormElement::text('title_ru', 'Заголовок Ru'),
                AdminFormElement::text('title_en', 'Заголовок En'),
                AdminFormElement::text('heading_uk', 'Категорії Uk'),
                AdminFormElement::text('heading_ru', 'Категорії Ru'),
                AdminFormElement::text('heading_en', 'Категорії En'),
                AdminFormElement::text('background_title_uk', 'Заголовок на фоні Uk'),
                AdminFormElement::text('background_title_ru', 'Заголовок на фоні Ru'),
                AdminFormElement::text('background_title_en', 'Заголовок на фоні En'),
                AdminFormElement::text('background_text_uk', 'Текст на фоні Uk'),
                AdminFormElement::text('background_text_ru', 'Текст на фоні Ru'),
                AdminFormElement::text('background_text_en', 'Текст на фоні En'),
                AdminFormElement::image('photo', 'Photo'),
                AdminFormElement::ckeditor('text_uk', 'Текст Uk'),
                AdminFormElement::ckeditor('text_ru', 'Текст Ru'),
                AdminFormElement::ckeditor('text_en', 'Текст En'),
            ]);

            $form->getButtons()
                ->setSaveButtonText('Зберегти')
                ->hideSaveAndCloseButton();

            return $form;
        });
    });
