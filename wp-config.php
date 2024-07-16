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
define( 'DB_NAME', 'lilacletters' );

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
define( 'AUTH_KEY',         ';IX~xYuG/aN7Fng(8Ug+k~d8DQFl]NUOA}l&|FV0)?PEITg6WZo90sI&&VIBe-,d' );
define( 'SECURE_AUTH_KEY',  'A.~[U:%s$kE 80-RX[yMQ)Jm/?03U%WV%g`:98D6;}lB^A1*$98s8]^VNiTzfIv|' );
define( 'LOGGED_IN_KEY',    '|6B5sf[L@5p1P~7ep0I9soRbu[Qs~u6#d8{ct:k{r3_q`mzYV<&yuKN_YC0=Key:' );
define( 'NONCE_KEY',        'z[5nGY|]04NIHa$u}f%%osaAv(ZWuqdxO1lB-rvM.*9~-fZYL(8&LU BT5s(64q]' );
define( 'AUTH_SALT',        '2/(7eI@s^stO>.9=qT@^@)&tja;BzU7>N9ImE!Ydz[3oS[=wO$u6c;Y~$NDK~8hf' );
define( 'SECURE_AUTH_SALT', ';>|%R6!=~!|pPTV9 d#)S-P`)tFu|cPEuA)PH!q_jdTiU1qSIVAxgm?I(hgTKHG<' );
define( 'LOGGED_IN_SALT',   ':QYLuKW&u6m$[ZF2KIPzNJ<7hEtebulmdd]TG5Y-JkB2NkS]-IZ|^!?_a@/3QP>L' );
define( 'NONCE_SALT',       'ya@D5tcRzZgts<P>Az_w?tgOlqX~(S.@[723&U6:0^8MzbtIPv:OfcWyG[}k9^6{' );

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
