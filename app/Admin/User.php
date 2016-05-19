<?php

    use App\Country;
    use App\UserInfo;
    use SleepingOwl\Admin\Model\ModelConfiguration;

    AdminSection::registerModel(UserInfo::class, function (ModelConfiguration $model) {
        $model->setTitle('Користувачі');
        // Display
        $model->onDisplay(function () {
            $display = AdminDisplay::datatables()->setHtmlAttribute('class', 'table-primary');
            $display->with('country', 'spaceorganization', 'user', 'city');
            $display->setFilters([
                AdminDisplayFilter::related('country_id')->setModel(Country::class),
            ]);

            $display->setColumns([
                AdminColumn::image('photo')->setLabel('Фото')
                    ->setWidth('100px'),
                AdminColumn::link('user.first_name')->setLabel('Ім’я')
                    ->setWidth('200px'),
                AdminColumn::text('user.last_name')->setLabel('Прізвище')
                    ->setWidth('200px'),
                AdminColumn::text('middle_name')->setLabel('По-батькові')
                    ->setWidth('200px'),
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
            $form = AdminForm::form()->setItems([
                AdminFormElement::text('user.first_name', 'Ім\’я'),
            ]);

            $form->getButtons()
                ->setSaveButtonText('Зберегти')
                ->hideSaveAndCloseButton();

            return $form;
        });
    });
