<?php
return [
    'main' => [
        'items' => [
            [
                'label' => 'Dashboard',
                'icon' => 'fe fe-home',
                'route' => 'admin.dashboard',
                'active' => 'admin',
            ],
        ],
    ],
    'subscribers' => [
        'items' => [
            [
                'label' => 'Subscribers',
                'icon' => 'fe fe-rss',
                'route' => 'admin.subscribers.index',
                'active' => 'admin/subscribers',
            ],
        ],
    ],
    'donations' => [
        'items' => [
            [
                'label' => 'Donations',
                'icon' => 'fe fe-dollar-sign',
                'route' => 'admin.donations.index',
                'active' => 'admin/donations',
            ],
        ],
    ],
    'teams' => [
        'items' => [
            [
                'label' => 'Teams',
                'icon' => 'fe fe-users',
                'route' => 'admin.teams.index',
                'active' => 'admin/teams',
            ],
        ],
    ],
    'tools' => [
        'title' => 'Tools & Management',
        'items' => [
            [
                'label' => 'Users',
                'icon' => 'fe fe-user',
                // 'route' => 'javascript:void(0)',
                'active' => 'admin/users*',
                'sub_items' => [
                    [
                        'label' => 'Manage Users',
                        'route' => 'admin.users.index',
                        'active' => 'admin/users*',
                    ],
                ],
            ],
        ],
    ],
];
