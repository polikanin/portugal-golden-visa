<?php

$sections = [
    [
        'prefix' => 'hp_',

        'sections' => [
            'hp_hello_block',
            'hp_advantages_block',
            'hp_vertical_slider_block',
            'hp_program_block',
            'hp_definition_block',
            'hp_investments_block',
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
