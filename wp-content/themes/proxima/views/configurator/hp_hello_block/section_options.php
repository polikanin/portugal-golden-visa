<?php

return [
    'label'            => __( 'Homepage Hello Block', 'proxima' ),
    'key'              => basename( __DIR__ ),
    'tab_demo_preview' => [
        'key'       => 'field_auto_key', // $section->field_auto_key(),
        'type'      => 'message',
        'message'   => 'Homepage Hello Block', // marck_section_demo_preview( $section->key ),
        'new_lines' => 'wpautop',
        'esc_html'  => 0,
    ],

    'tab_content' => [
        array(
            'key' => 'field_660f2e0868b96',
            'label' => 'Title',
            'name' => 'title',
            'type' => 'textarea',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'maxlength' => '',
            'rows' => '',
            'new_lines' => '',
        ),
        array(
            'key' => 'field_660f2e3468b97',
            'label' => 'Text',
            'name' => 'text',
            'type' => 'textarea',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'maxlength' => '',
            'rows' => '',
            'new_lines' => '',
        ),
        array(
            'key' => 'field_660f2e4368b98',
            'label' => 'Link',
            'name' => 'link',
            'type' => 'link',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'return_format' => 'array',
        ),
        array(
            'key' => 'field_660f2e6368b99',
            'label' => 'Background',
            'name' => 'bg',
            'type' => 'image',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'return_format' => 'array',
            'preview_size' => 'thumbnail',
            'library' => 'all',
            'min_width' => '',
            'min_height' => '',
            'min_size' => '',
            'max_width' => '',
            'max_height' => '',
            'max_size' => '',
            'mime_types' => '',
        )
    ],

    'tab_options' => [],
    /**/
];
