<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

define( 'WP_HOME', 'http://portugal-visa.zz' );
define( 'WP_SITEURL', 'http://portugal-visa.zz' );

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portugal_visa_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', 'Y4tp)Jh-TU&UB BU; S4k,rI%&nK5t*cAl9a?IOli+?G?q-{$(@yJaiBpMH`ceoD' );
define( 'SECURE_AUTH_KEY', 'nUKR>M@5@e+;l;CLv* REJ9 x`cAh/cXBwuS/CE=;i`:eO;):&gd=mT{Eh]$iHOU' );
define( 'LOGGED_IN_KEY', ':pxx*v]k;%S@H0lT[S6rj$`,K{munT^Hqg~6n@xtoTv8*H%4KvABKdb2TvEdy&Ho' );
define( 'NONCE_KEY', '@1v84SGJVCnP^@hT3a3*JNZ&y04zRY(&VEGYE4q4DW,NY#x@vNR:G~s~i&uakVep' );
define( 'AUTH_SALT', 'l}?;.IclK`PuJcgk&dS`6-mx}jLNe[Fw2fKsmMVk(v^~`,[Cf$!_R[k3a^TPPGxR' );
define( 'SECURE_AUTH_SALT', 'G[a)v`Auv{Hz.t#?*=DfkK;UzMt{.`|!^RcAXF,L`JiUGAJ={bd<Thz&eDot~Lb@' );
define( 'LOGGED_IN_SALT', 'Eg[e8fSxO7GBl_@jE4-0jT5!8)?j]?b)^ZsF`CC3j-u!nznTN98dd@kEs%8p::1+' );
define( 'NONCE_SALT', '$-Y/g7Aj(vVAvX,Zm?i+TfgIDVjOOJUP2YYO #( E>oK]n#Gj42U]$C[~ol~bil$' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );

/* Add any custom values between this line and the "stop editing" line. */

define( 'IS_VITE_DEVELOPMENT', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( !defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
