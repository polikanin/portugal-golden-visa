<?php

$sections = [
    [
        'prefix' => '',

        'sections' => [
            'hp_text',
        ],

        'location' => [
            [
                [
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'templates/configurator.php',
                ],
            ],

            [
                [
                    'param'    => 'post_type',
                    'operator' => '==',
                    'value'    => 'sections',
                ]
            ],
        ],
    ],

    [
        'prefix' => 'cp_',

        'sections' => [
        ],

        'location' => [
            [
                [
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'template/contact.php',
                ]
            ],

            [
                [
                    'param'    => 'post_type',
                    'operator' => '==',
                    'value'    => 'sections',
                ]
            ]
        ]
    ],
];

return $sections;
