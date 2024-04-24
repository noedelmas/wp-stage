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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lpgm' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '&*0w%h)wCQixJT P7+4U{NunHTz.LJvKDJU?oWH-Wc7kq:>V]K$;#3&E[[QZEoW1' );
define( 'SECURE_AUTH_KEY',  'nRtXD ?F&+-SGIVgp?[/<1}xO5>l9Q~O0Ip?5Wb@Y733lA.AI<9E5Zd+2]@hgt{G' );
define( 'LOGGED_IN_KEY',    '{,MA4!vAw8i?D D5FDuup+%TO[wuVKF4D0]$iG[W:#q)NM8vTRcU 5Q289tog>BE' );
define( 'NONCE_KEY',        'F1Xm$;*v8#tIp+5x<:Sa>f[ d~MP2D~s;*61Q+Q@p#1^?D_ALm?:j{A Vm6)_S{4' );
define( 'AUTH_SALT',        'lf/2Zv&nM#6A8PPzB$` F9#TkgMBo53J|5Nqg6]k(7Nb(=?+]6cW:bmIDTvM^+1B' );
define( 'SECURE_AUTH_SALT', 'p^SBcm]e`OG[JEbSiFi%x8#pM9vjX[_pGQ`$.HGV{yJZGs1ZXQ+&<e1ejowr@Bx(' );
define( 'LOGGED_IN_SALT',   'Y*.Z|&1J/:df311D)m%%/)OVBP31/XJ6--P$vbyVp3@0I_1Zqo_-PPydDS6}V)#b' );
define( 'NONCE_SALT',       'D:&+eGPKNIkXH0-oiMu^6%y~BJw:Eo9;yH= `VT!]^.l~9d3 L= tH{y-2Mo[2$S' );

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
