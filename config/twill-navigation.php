<?php

return [
    'pages' => [
        'title' => 'Pages',
        'module' => true
    ],
    'employees' => [
        'title' => 'Employees',
        'module' => true
    ],
    'navigation' => [
        'title' => 'Navigation',
        'route' => 'admin.navigation.main',
    ],
    'settings' => [
        'title' => 'Settings',
        'route' => 'admin.settings',
        'params' => ['section' => 'socials'],
        'primary_navigation' => [
            'socials' => [
                'title' => 'Social media settings',
                'route' => 'admin.settings',
                'params' => ['section' => 'socials']
            ],
        ]
    ],
];
