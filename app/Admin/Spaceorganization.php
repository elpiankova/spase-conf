<?php
    use App\Country;
    use App\Spaceorganization;
    use SleepingOwl\Admin\Model\ModelConfiguration;

    AdminSection::registerModel(Spaceorganization::class, function (ModelConfiguration $model) {
        $model->setTitle('Організації');

        // Display
        $model->onDisplay(function () {
            $display = AdminDisplay::datatables()->setHtmlAttribute('class', 'table-primary');
            $display->setColumnFilters([
                AdminColumnFilter::text()->setPlaceholder('Назва'),
                AdminColumnFilter::select()->setPlaceholder('Країна')->setModel(new Country)->setDisplay('title_uk'),
            ]);

            $display->with('country');
            $display->setFilters([
                AdminDisplayFilter::related('countries_id')->setModel(Country::class),
            ]);
            $display->setOrder([[1, 'asc']]);
            $display->setColumns([
                AdminColumn::link('title_uk')->setLabel('Назва'),
                AdminColumn::text('country.title_uk')->append(AdminColumn::filter('countries_id'))->setLabel('Країни'),
            ]);

            return $display;
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
