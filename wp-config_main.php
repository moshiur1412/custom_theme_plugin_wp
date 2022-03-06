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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_base' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'db' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );


define( 'FS_METHOD', 'direct' );
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
define( 'AUTH_KEY',         '_/|zTr-:<WI7KvB6B5?UR7a(G0:nQ,#D%?yT3u_F+!?M3_0Ewn=^]/3^wHJ0<63H' );
define( 'SECURE_AUTH_KEY',  'hf61ccj9WX29}xm*vhY-u#PaoOva(wO `jDwczcN2D ;;bWKK!#ai!jDF?&!%yw#' );
define( 'LOGGED_IN_KEY',    '$E!mdwE=zuArh.lT-Bfh31?+3!p|#?pu)UzHs/fz!o-u5%.^`*d[J5m&[*KsfEJU' );
define( 'NONCE_KEY',        'S@gB:XcuV^sbgmLcsaIzM)U^ .n]lb9Lz4bdq!h{Q+k#%8IXxdMvTf>?/h>.X1!:' );
define( 'AUTH_SALT',        '.IVC>}(gcx$@@N7gFW{p$7%Yd}o|nNh%:)bo)9N;~tcJyX16_REjo8bl^h& `=f6' );
define( 'SECURE_AUTH_SALT', 'Fg&sOS%#rj?{bPnN>]bTX=V;FT 6]n0eP~i_RG$fS!C?jS[]4fbc}E&ODLvypzOf' );
define( 'LOGGED_IN_SALT',   'NQ]N=qO=*?|jK!rdwQXXI`j|-DfVFI#eD$ )&5jR!(Ez4AH(:QFa#{{M(T{c3=FB' );
define( 'NONCE_SALT',       '`$R^k]S3_1wdjoKtjXw/t{A:zTipcE#22.B6$y{NZEHvhlRM*;<}yFM>1w6*Px)_' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );




/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
