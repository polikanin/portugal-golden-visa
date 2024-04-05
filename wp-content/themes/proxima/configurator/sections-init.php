<?php

$sections = [
    [
        'prefix' => 'hp_',

        'sections' => [
            'hp_hello_block',
            'hp_advantages_block',
        ],

        'location' => [
            [
                [
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'templates/hp_configurator.php',
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
