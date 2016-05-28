<?php

    use App\Conferequest;
    use App\Conferauthor;
    use SleepingOwl\Admin\Model\ModelConfiguration;

    AdminSection::registerModel(Conferequest::class, function (ModelConfiguration $model) {
        $model->setTitle('Заявки');
        // Display
        $model->onDisplay(function () {
            $display = AdminDisplay::datatables()->setHtmlAttribute('class', 'table-primary');
            $display->with('user', 'user_info','author','section');

            $display->setColumns([
                AdminColumn::link('user.first_name')->setLabel('Ім’я')
                    ->setWidth('200px'),
                AdminColumn::text('user.last_name')->setLabel('Прізвище')
                    ->setWidth('200px'),
                AdminColumn::text('user_info.middle_name')->setLabel('По-батькові')
                    ->setWidth('200px'),
                AdminColumn::text('section.title_uk')
                    ->setLabel('Секція'),
                AdminColumn::text('title')
                    ->setLabel('Заголовок'),
                AdminColumn::lists('author.name')
                    ->setLabel('Автори'),
            ]);
            return $display;
        });
//        // Create And Edit
        $model->onCreateAndEdit(function() {
            $form = AdminForm::form()->setItems([
                AdminFormElement::text('title', 'Заголовок'),
                AdminFormElement::select('section_id', 'Секція')->setModelForOptions('App\Сategory')->setDisplay('title_uk'),
                AdminFormElement::ckeditor('text', 'Текст'),
            ]);

            $form->getButtons()
                ->setSaveButtonText('Зберегти')
                ->hideSaveAndCloseButton();

            return $form;
        });
    });
