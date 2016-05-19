<?php
    use App\Confdescription;
    use SleepingOwl\Admin\Model\ModelConfiguration;

    AdminSection::registerModel(Confdescription::class, function (ModelConfiguration $model) {
        $model->setTitle('Місце проведення');

        // Display
        $model->onDisplay(function () {
            return AdminDisplay::table()->setColumns([
                AdminColumn::link('title_uk')->setLabel('Заголовок'),
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
                })
            );

            $form->getButtons()
                ->setSaveButtonText('Зберегти')
                ->hideSaveAndCloseButton();

            return $form;
        });
    });

