<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'proiect' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'jtc6H4N1oAQ1c@Q)^s|u,ei41qJi!%A0o6Q~F,^0x,%O<<5OwH~ >;0,8f, 6H=*' );
define( 'SECURE_AUTH_KEY',  '[am]4},eY]pIvNCT*hgdUukTg/Be-cTae,oqDz Z{M =U`)P)4_DA{$A=g;Yhi>;' );
define( 'LOGGED_IN_KEY',    'lDyu[Bof{q{903[iocU)Qd$iipnFEa2,iw9ycEqClbHl[J%#i#aFnx4OMhMrxu)R' );
define( 'NONCE_KEY',        'd_DnB9i/3<t]X?2(w,>^#:Q9_|b]crpVcE{7Ocg0:VUL8Txeb4<n+$#Z7,YrItcx' );
define( 'AUTH_SALT',        '4XY%I:(,/2%KJ v+~DU|xM9+QO*RzI1M+^soL_])f@{Vps/?hqy9{{r_!,.mlWJ=' );
define( 'SECURE_AUTH_SALT', '@:~C*iU|uXy10(?K8Cn(dcaSnJh7j.(!O;Ld|ZC2$H/X.2WjZwWXlScSxM1ivqz{' );
define( 'LOGGED_IN_SALT',   'e3+D#(N8l,[r5Tix>uYj~&+(B#{q3y>y8Te|2Sy%8+SrD@Ki_kJ9;/ |owApF{8:' );
define( 'NONCE_SALT',       'I6D~,@mm&zj`Q}4.QW5zyr91kk}~5!@0jH}X!uD0E)-doL87lp(/@8;LF?=ml8CB' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

define( 'UPLOADS', 'wp-content/uploads' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
