<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mindset' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '1%`<%H>WjrPU6/bYfnaw40/}TEqpmM(dn9(leB}aUj;:-GlqfLwl.)T5FeD 9^<X');
define('SECURE_AUTH_KEY',  'c#sv!Pb7I&-s9S +GoQ%RoJm2aVEWCQ@|k%-toG,z-IiRRxG8h[r{UJ_!-)U=yCA');
define('LOGGED_IN_KEY',    '3-Bi(V?OxhU|O-2M=m!@IZW7HW-}<`#(Chu!u8{nN=m>Z$klLLErTApKSY@3;~tp');
define('NONCE_KEY',        '%4/bd}2g_P4|]-?,t<3t3.{H>_RDyMTW}YO&cnLB#)n8Mf@n2U~xkfLi+YJb1V!4');
define('AUTH_SALT',        'j47nxqc9@5ps6pMoo^=|Db5G>rWZ0Z(Y-wl.YW($1D2<syY5+p9&SC)caCj-}6(d');
define('SECURE_AUTH_SALT', 'nY%88Mf^q ^z.}m|?~0p*R8-3s6^O5j`sGaP<7Po-cLl*+~PmXJr ` Ed9;XC=+i');
define('LOGGED_IN_SALT',   'ElYXT+E[lj7Ew|_+h7)XT{, &*;~9!}+n;N8vR(K8@-l>@}.8OXOyO^Wd|-~tT K');
define('NONCE_SALT',       'Nt sr?ma-pt+dC!;,6*%%#7b>4a{S|N?3=2im+vr|^PX,ZNX&VOYL8^RH2*pieI3');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

define( 'WP_ENVIRONMENT_TYPE', 'development' ); 
define( 'WP_DEVELOPMENT_MODE', 'all' );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
