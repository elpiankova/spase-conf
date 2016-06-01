<?php

    use App\Country;
    use App\User;
    use SleepingOwl\Admin\Model\ModelConfiguration;

    AdminSection::registerModel(User::class, function (ModelConfiguration $model) {
        $model->setTitle('Користувачі');
        // Display
        $model->onDisplay(function () {
            $display = AdminDisplay::datatables()->setHtmlAttribute('class', 'table-primary');
            $display->with('country', 'spaceorganization', 'city');
            $display->setFilters([
                AdminDisplayFilter::related('country_id')->setModel(Country::class),
            ]);

            $display->setColumns([
                AdminColumn::image('photo')->setLabel('Фото')
                    ->setWidth('100px'),
                AdminColumn::link('last_name')->setLabel('Прізвище')
                    ->setWidth('100px'),
                AdminColumn::text('first_name')->setLabel('Ім’я')
                    ->setWidth('100px'),
                AdminColumn::text('middle_name')->setLabel('По-батькові')
                    ->setWidth('100px'),
                AdminColumn::text('email')->setLabel('email')
                    ->setWidth('100px'),
                AdminColumn::text('phone')->setLabel('Телефон')
                    ->setWidth('100px'),
                AdminColumn::text('country.title_uk')
                    ->setLabel('Країна')
                    ->append(AdminColumn::filter('country_id')),
                AdminColumn::text('spaceorganization.title_uk')
                    ->setLabel('Організація')
                    ->append(AdminColumn::filter('organization_id')),
            ]);
            return $display;
        });
        // Create And Edit
        $model->onCreateAndEdit(function() {
            $form = AdminForm::panel();

            $form = AdminForm::form()->setItems([
                AdminFormElement::columns()
                    ->addColumn(function () {
                        return [
                            AdminFormElement::text('email', 'email'),
                            AdminFormElement::text('last_name', 'Прізвище'),
                            AdminFormElement::select('country_id', 'Країна')->setModelForOptions('App\Country')->setDisplay('title_uk'),
                        ];
                    })->addColumn(function () {
                        return [
                            AdminFormElement::date('birth', 'Дата народження'),
                            AdminFormElement::text('first_name', 'Ім’я'),
                            AdminFormElement::select('city_id', 'Місто')->setModelForOptions('App\City')->setDisplay('title_uk'),
                        ];
                    })->addColumn(function () {
                        return [
                            AdminFormElement::text('phone', 'Телефон'),
                            AdminFormElement::text('middle_name', 'По-батькові'),
                            AdminFormElement::select('organization_id', 'Організація')->setModelForOptions('App\Spaceorganization')->setDisplay('title_uk'),
                        ];
                    })->addColumn(function () {
                        return [
                            AdminFormElement::image('photo', 'Фото'),
                        ];
                    }),
            ]);

            $form->getButtons()
                ->setSaveButtonText('Зберегти')
                ->hideSaveAndCloseButton();

            return $form;
        });
    });
