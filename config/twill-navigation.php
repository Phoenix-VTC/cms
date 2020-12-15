<?php

return [
    'pages' => [
        'title' => 'Pages',
        'module' => true
    ],
    'navigation' => [
        'title' => 'Navigation',
        'route' => 'admin.navigation.main',
    ],
    'settings' => [
        'title' => 'Settings',
        'route' => 'admin.settings',
        'params' => ['section' => 'blog'],
        'primary_navigation' => [
            'settings' => [
                'title' => 'Blog settings',
                'route' => 'admin.settings',
                'params' => ['section' => 'blog']
            ],
            'employees' => [
                'title' => 'Employees settings',
                'route' => 'admin.settings',
                'params' => ['section' => 'employees']
            ],
        ]
    ],
];
