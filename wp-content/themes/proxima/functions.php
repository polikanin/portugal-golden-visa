<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// functions.php is empty, so you can easily track what code is needed in order to Vite + Tailwind JIT run well

require 'vendor/autoload.php';

use eftec\bladeone\BladeOne;
use Rlink\Proxima\InitACF;

$views = __DIR__ . '/views';
$cache = __DIR__ . '/cache';

$blade = new BladeOne( $views, $cache, BladeOne::MODE_DEBUG ); // MODE_DEBUG allows to pinpoint troubles.

$InitACF = new InitACF();
$InitACF->init();

include 'inc/load.inc.php';

include 'src/helpers.php';

add_filter( 'gettext', function ( $translation, $text, $domain ) {

    // de_DE_formal
    // en_US

    if ( $domain !== 'proxima_lang' ) return $translation;

    [ $code ] = explode( '_', get_locale() );

    $key = explode( '.', $text );

    $lang = locate_template( 'lang/' . $code . '/' . array_shift( $key ) . '.php' );

    if ( empty( $lang ) ) return $translation;

    $lang = require $lang;

    foreach ( $key as $item ) {

        if ( !empty( $lang[ $item ] ) ) {

            if ( is_string( $lang[ $item ] ) ) $translation = $lang[ $item ];

            else $lang = $lang[ $item ];
        }
    }

    return $translation;

}, 10, 3 );