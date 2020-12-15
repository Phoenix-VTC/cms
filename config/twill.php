<?php

return [
    'frontend' => [
        'views_path' => 'site.previews',
    ],
    'enabled' => [
        'users-management' => true,
        'media-library' => true,
        'file-library' => true,
        'block-editor' => true,
        'buckets' => true,
        'users-image' => false,
        'settings' => true,
        'dashboard' => true,
        'search' => true,
        'users-description' => false,
        'activitylog' => true,
        'users-2fa' => false,
        'users-oauth' => false,
    ],
    'buckets' => [
        'main' => [
            'name' => 'Navigation',
            'buckets' => [
                'main_navigation' => [
                    'name' => 'Main navigation',
                    'bucketables' => [
                        [
                            'module' => 'pages',
                            'name' => 'pages',
                            'scopes' => ['published' => true],
                        ],
                    ],
                    'max_items' => 5,
                ],
            ],
        ],
    ],
    'bucketsRoutes' => [
        'main' => 'navigation',
    ],
    'block_editor' => [
        'blocks' => [
            'feature-card' => [
                'component' => 'a17-block-feature-card',
            ],
            'statistics' => [
                'component' => 'a17-block-statistics',
            ],
        ],
        'repeaters' => [
//            'journey-step' => [
//                'title' => 'Journey Step',
//                'trigger' => 'Add journey step',
//                'component' => 'a17-block-journey-step',
//                'max' => 10,
//            ],
        ],
        'crops' => [
            'image' => [
                'default' => [
                    [
                        'name' => 'default',
                        'ratio' => 0,
                    ],
                ],
            ],
            'header_image' => [
                'default' => [
                    [
                        'name' => 'default',
                        'ratio' => 0,
                    ],
                ],
            ],
        ],
    ],
];
