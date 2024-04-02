<?php

/**
 * @param bool $post_id
 * @param string $prefix
 * @return void
 * @throws Exception
 */
function get_configurator( bool $post_id = false, string $prefix = '' ): void
{
    global $blade;

    if ( class_exists( 'acf_pro' ) && have_rows( $prefix . 'configurator', $post_id ) ) {
        $data = get_field( $prefix . 'field_configurator' );

        while ( have_rows( $prefix . 'configurator', $post_id ) ) {
            the_row();

            // if ( 'hp_kits' == get_row_layout() ) dd( $data, array_shift( $data ), get_row_layout() );

            if ( get_row_layout() ) echo $blade->run( implode( '.', [ 'configurator', get_row_layout(), 'index' ] ), array_shift( $data ) );
        }
    }
}