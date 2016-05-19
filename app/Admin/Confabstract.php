<?php
    use App\Confabstract;
    use SleepingOwl\Admin\Model\ModelConfiguration;

    AdminSection::registerModel(Confabstract::class, function (ModelConfiguration $model) {
        $model->setTitle('Тези');

        // Display
        $model->onDisplay(function () {
            return AdminDisplay::table()->setColumns([
                AdminColumn::link('text_uk')->setLabel('Текст'),
            ])->paginate(15);
        });

        // Create And Edit
        $model->onCreateAndEdit(function () {
            // Create And Edit
            $form = AdminForm::panel();
            $form->setItems(
                AdminFormElement::columns()->addColumn(function () {
                    return [
                        AdminFormElement::text('title_uk', 'Text uk'),
                        AdminFormElement::ckeditor('text_uk', 'Text uk'),
                    ];
                })->addColumn(function () {
                    return [
                        AdminFormElement::text('title_ru', 'Text ru'),
                        AdminFormElement::ckeditor('text_ru', 'Text ru'),
                    ];
                })->addColumn(function () {
                    return [
                        AdminFormElement::text('title_en', 'Text en'),
                        AdminFormElement::ckeditor('text_en', 'Text en'),
                    ];
                }),
                AdminFormElement::columns()->addColumn(function () {
                    return [
                        AdminFormElement::image('photo', 'Фото'),
                    ];
                })->addColumn(function () {
                    return [
                        AdminFormElement::file('file', 'Файл'),
                    ];
                })
            );

            $form->getButtons()
                ->setSaveButtonText('Зберегти')
                ->hideSaveAndCloseButton();

            return $form;
        });
    });
