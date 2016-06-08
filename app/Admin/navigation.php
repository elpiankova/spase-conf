<?php

    use SleepingOwl\Admin\Navigation\Page;

    return [


        [
            'title' => 'Конференція',
            'icon'  => 'fa fa-graduation-cap',
            'pages' => [
                (new Page())
                    ->setIcon('fa fa-binoculars')
                    ->setPriority(0)
                    ->setTitle('Відбір заявок')
                    ->setUrl('admin/download'),
                (new Page(\App\Conferequest::class))
                    ->setIcon('fa fa-users')
                    ->setPriority(0),
            ],
        ],
        (new Page(\App\User::class))
            ->setIcon('fa fa-users')
            ->setPriority(0),
        [
            'title' => 'Сайт',
            'icon'  => 'fa fa-desktop',
            'pages' => [
                [
                    'title' => 'Конференція',
                    'icon'  => 'fa fa-graduation-cap',
                    'pages' => [

                        (new Page(\App\Confcommittee::class))
                            ->setIcon('fa fa-user-secret')
                            ->setPriority(0),

                        (new Page(\App\Confdescription::class))
                            ->setIcon('fa fa-location-arrow')
                            ->setPriority(0),

                        (new Page(\App\Confabstract::class))
                            ->setIcon('fa fa-sticky-note')
                            ->setPriority(0),

                        (new Page(\App\Confinfo::class))
                            ->setIcon('fa fa-info')
                            ->setPriority(0),
                    ]
                ],
                (new Page(\App\Archive::class))
                    ->setIcon('fa fa-archive')
                    ->setPriority(1),
                [
                    'title' => 'Головна',
                    'icon'  => 'fa fa-laptop',
                    'pages' => [
                        (new Page(\App\City::class))
                            ->setIcon('fa fa-map')
                            ->setPriority(0),
                        (new Page(\App\Country::class))
                            ->setIcon('fa fa-globe')
                            ->setPriority(0),
                        (new Page(\App\Spaceorganization::class))
                            ->setIcon('fa fa-university')
                            ->setPriority(0),
                        (new Page(\App\Сategory::class))
                            ->setIcon('fa fa-tasks')
                            ->setPriority(0),
                        (new Page(\App\Index::class))
                            ->setIcon('fa fa-television')
                            ->setPriority(0),
                    ],
                ],
            ],
        ],
    ];