<?php

    use App\Spaceorganization;
    use SleepingOwl\Admin\Model\ModelConfiguration;

    AdminSection::registerModel(Spaceorganization::class, function (ModelConfiguration $model) {
        $model->setTitle('Організації');

        // Display
        $model->onDisplay(function () {
            return AdminDisplay::table()->setApply(function ($query) {
                $query->orderBy('updated_at', 'desc');
            })->setColumns([
                AdminColumn::link('title_uk')->setLabel('Назва'),
            ])->paginate();
        });

        // Create And Edit
        $model->onCreateAndEdit(function () {
            $form = AdminForm::form()->setItems([
                AdminFormElement::select('countries_id', 'Країна')->setModelForOptions('App\Country')->setDisplay('title_uk'),
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
