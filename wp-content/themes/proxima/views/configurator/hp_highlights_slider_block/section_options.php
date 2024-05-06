<?php

return [
    'label' => __('Highlights Block', 'proxima'),
    'key' => basename(__DIR__),
    'tab_demo_preview' => [
        'key' => 'field_auto_key', // $section->field_auto_key(),
        'type' => 'message',
        'message' => 'Highlights Block', // marck_section_demo_preview( $section->key ),
        'new_lines' => 'wpautop',
        'esc_html' => 0,
    ],

    'tab_content' => [
        array(
            'key' => 'field_66394bbc24c4d',
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
            'rows' => 4,
            'new_lines' => 'br',
        ),
        array(
            'key' => 'field_66394b5556805',
            'label' => 'Subtitle',
            'name' => 'subtitle',
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
            'rows' => 6,
            'new_lines' => 'br',
        ),
        array(
            'key' => 'field_66394b6a56806',
            'label' => 'link',
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
            'key' => 'field_66394bc980ecb',
            'label' => 'Highlights',
            'name' => 'highlights',
            'type' => 'flexible_content',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'layouts' => array(
                'layout_661016afa3d5c' => array(
                    'key' => 'layout_661016afa3d5c',
                    'name' => 'highlight',
                    'label' => 'Highlight',
                    'display' => 'block',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_66394bd1225b1',
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
                            'key' => 'field_66394bd8a86da',
                            'label' => 'Title',
                            'name' => 'title',
                            'type' => 'text',
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
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => '',
                        ),
                        array(
                            'key' => 'field_66394bdd6eac5',
                            'label' => 'Description',
                            'name' => 'description',
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
                            'rows' => 2,
                            'new_lines' => 'br',
                        ),
                        array(
                            'key' => 'field_66394be3d8bea',
                            'label' => 'Items',
                            'name' => 'items',
                            'type' => 'repeater',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'collapsed' => '',
                            'min' => 0,
                            'max' => 4,
                            'layout' => 'table',
                            'button_label' => '',
                            'sub_fields' => array(
                                array(
                                    'key' => 'field_66394bea65f51',
                                    'label' => 'Title',
                                    'name' => 'title',
                                    'type' => 'text',
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
                                    'prepend' => '',
                                    'append' => '',
                                    'maxlength' => '',
                                ),
                                array(
                                    'key' => 'field_66394bf61d6c9',
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
                                    'rows' => 2,
                                    'new_lines' => 'br',
                                ),
                            ),
                        ),
                    ),
                    'min' => '',
                    'max' => '',
                ),
            ),
            'button_label' => 'Add Row',
            'min' => '',
            'max' => '',
        ),
    ],

    'tab_options' => [],
    /**/
];
