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
                'footer_navigation' => [
                    'name' => 'Footer navigation',
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
            'cta' => [
                'component' => 'a17-block-cta',
            ],
            'text' => [
                'component' => 'a17-block-text',
            ],
            'testimonial' => [
                'component' => 'a17-block-testimonial',
            ],
        ],
        'repeaters' => [
            'statistic' => [
                'title' => 'Statistic',
                'trigger' => 'Add statistic',
                'component' => 'a17-block-statistic',
                'max' => 10,
            ],
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
