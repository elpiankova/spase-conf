<?php
    use App\Country;
    use SleepingOwl\Admin\Model\ModelConfiguration;

    AdminSection::registerModel(Country::class, function (ModelConfiguration $model) {
        $model->setTitle('Країни');

        // Display
        $model->onDisplay(function () {
            return AdminDisplay::table()->setColumns([
                AdminColumn::link('title_uk')->setLabel('Заголовок'),
            ])->paginate(15);
        });

        // Create And Edit
        $model->onCreateAndEdit(function () {
            $form = AdminForm::form()->setItems([
                AdminFormElement::text('title_uk', 'Заголовок Uk'),
                AdminFormElement::text('title_ru', 'Заголовок Ru'),
                AdminFormElement::text('title_en', 'Заголовок En'),
            ]);

            $form->getButtons()
                ->setSaveButtonText('Зберегти')
                ->hideSaveAndCloseButton();

            return $form;
        });
    });
