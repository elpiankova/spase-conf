<?php

    use SleepingOwl\Admin\Navigation\Page;

    return [


        [
            'title' => 'Конференція',
            'icon'  => 'fa fa-graduation-cap',
            'pages' => [
                [
                    'title' => 'Завантажити заявки',
                    'icon'  => 'fa fa-upload',
                    'url'   => route('admin.information'),
                ],
                [
                    'title' => 'Заявки',
                    'icon'  => 'fa fa-file-archive-o',
                    'url'   => route('admin.information'),
                ],
            ],
        ],
        [
            'title' => 'Користувачі',
            'icon'  => 'fa fa-users',
            'url'   => route('admin.information'),
        ],
        [
            'title' => 'Сайт',
            'icon'  => 'fa fa-desktop',
            'pages' => [
                [
                    'title' => 'Конференція',
                    'icon'  => 'fa fa-graduation-cap',
                    'pages' => [
                        [
                            'title' => 'Комітет',
                            'icon'  => 'fa fa-user-secret',
                            'url'   => route('admin.information'),
                        ],
                        [
                            'title' => 'Місце проведення',
                            'icon'  => 'fa fa-location-arrow',
                            'url'   => route('admin.information'),
                        ],
                        [
                            'title' => 'Тези',
                            'icon'  => 'fa fa-sticky-note',
                            'url'   => route('admin.information'),
                        ],
                        [
                            'title' => 'Інформація',
                            'icon'  => 'fa fa-info',
                            'url'   => route('admin.information'),
                        ],
                    ]
                ],
                (new Page(\App\Archive::class))
                    ->setIcon('fa fa-map')
                    ->setPriority(0),
                [
                    'title' => 'Архів',
                    'icon'  => 'fa fa-archive',
                    'url'   => route('admin.information'),
                ],
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