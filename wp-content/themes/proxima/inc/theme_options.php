<?php


if ( function_exists( 'acf_add_local_field_group' ) ) {

    acf_add_local_field_group( [
        'key'                   => 'group_5db03c368b09d',
        'title'                 => 'Theme Settings',
        'fields'                => [

            [
                'key'               => 'field_5ebfac98803d0',
                'label'             => 'Main Settings',
                'name'              => '',
                'type'              => 'tab',
                'instructions'      => '',
                'required'          => 0,
                'conditional_logic' => 0,
                'wrapper'           => [
                    'width' => '',
                    'class' => '',
                    'id'    => '',
                ],
                'placement'         => 'top',
                'endpoint'          => 0,
            ],
            [
                'key'               => 'field_65c4cdc2de00a',
                'label'             => 'contact_page',
                'name'              => 'contact_page',
                'type'              => 'post_object',
                'instructions'      => '',
                'required'          => 0,
                'conditional_logic' => 0,
                'wrapper'           => [
                    'width' => '',
                    'class' => '',
                    'id'    => '',
                ],
                'post_type'         => [
                    0 => 'page',
                ],
                'taxonomy'          => '',
                'allow_null'        => 0,
                'multiple'          => 0,
                'return_format'     => 'id',
                'ui'                => 1,
            ],

            [
                'key'               => 'field_65d101650b1f2',
                'label'             => 'logo',
                'name'              => 'logo',
                'type'              => 'image',
                'instructions'      => '',
                'required'          => 0,
                'conditional_logic' => 0,
                'wrapper'           => [
                    'width' => '',
                    'class' => '',
                    'id'    => '',
                ],
                'return_format'     => 'id',
                'preview_size'      => 'medium',
                'library'           => 'all',
                'min_width'         => '',
                'min_height'        => '',
                'min_size'          => '',
                'max_width'         => '',
                'max_height'        => '',
                'max_size'          => '',
                'mime_types'        => '',
            ],

            // CF7 TAB
            [
                'key'               => 'field_65405adb6a661',
                'label'             => 'CF7',
                'name'              => '',
                'type'              => 'tab',
                'instructions'      => '',
                'required'          => 0,
                'conditional_logic' => 0,
                'wrapper'           => [
                    'width' => '',
                    'class' => '',
                    'id'    => '',
                ],
                'placement'         => 'top',
                'endpoint'          => 0,
            ],
            [
                'key'               => 'field_65405aed05fb8',
                'label'             => 'CF7 Shortcode',
                'name'              => 'cf7_shortcode',
                'type'              => 'text',
                'instructions'      => '',
                'required'          => 0,
                'conditional_logic' => 0,
                'wrapper'           => [
                    'width' => '',
                    'class' => '',
                    'id'    => '',
                ],
                'default_value'     => '',
                'placeholder'       => '',
                'prepend'           => '',
                'append'            => '',
                'maxlength'         => '',
            ],

            [
                'key'               => 'field_65eb57864cc01',
                'label'             => 'Contact',
                'name'              => '',
                'type'              => 'tab',
                'instructions'      => '',
                'required'          => 0,
                'conditional_logic' => 0,
                'wrapper'           => [
                    'width' => '',
                    'class' => '',
                    'id'    => '',
                ],
                'placement'         => 'top',
                'endpoint'          => 0,
            ],
            [
                'key'               => 'field_65eb57a14cc02',
                'label'             => 'Phone',
                'name'              => 'phone',
                'type'              => 'text',
                'instructions'      => '',
                'required'          => 0,
                'conditional_logic' => 0,
                'wrapper'           => [
                    'width' => '',
                    'class' => '',
                    'id'    => '',
                ],
                'default_value'     => '',
                'placeholder'       => '',
                'prepend'           => '',
                'append'            => '',
                'maxlength'         => '',
            ],
            [
                'key'               => 'field_65eb57b14cc03',
                'label'             => 'Email',
                'name'              => 'email',
                'type'              => 'text',
                'instructions'      => '',
                'required'          => 0,
                'conditional_logic' => 0,
                'wrapper'           => [
                    'width' => '',
                    'class' => '',
                    'id'    => '',
                ],
                'default_value'     => '',
                'placeholder'       => '',
                'prepend'           => '',
                'append'            => '',
                'maxlength'         => '',
            ],

        ],
        'location'              => [
            [
                [
                    'param'    => 'options_page',
                    'operator' => '==',
                    'value'    => 'theme-settings',
                ],
            ],
        ],
        'menu_order'            => 0,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen'        => '',
        'active'                => true,
        'description'           => '',

    ] );

}
