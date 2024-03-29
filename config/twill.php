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
                    'max_items' => 8,
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
            'partners' => [
                'component' => 'a17-block-partners',
            ],
            'employees' => [
                'component' => 'a17-block-employees',
            ],
            'accordions' => [
                'component' => 'a17-block-accordions',
            ],
            'journey' => [
                'component' => 'a17-block-journey',
            ],
            'image' => [
                'component' => 'a17-block-image',
            ],
        ],
        'repeaters' => [
            'statistic' => [
                'title' => 'Statistic',
                'trigger' => 'Add statistic',
                'component' => 'a17-block-statistic',
                'max' => 10,
            ],
            'partner' => [
                'title' => 'Partner',
                'trigger' => 'Add partner',
                'component' => 'a17-block-partner',
            ],
            'accordion' => [
                'title' => 'Accordion',
                'trigger' => 'Add accordion',
                'component' => 'a17-block-accordion',
            ],
            'journey-step' => [
                'title' => 'Journey Step',
                'trigger' => 'Add journey step',
                'component' => 'a17-block-journey-step',
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
            'author_image' => [
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
