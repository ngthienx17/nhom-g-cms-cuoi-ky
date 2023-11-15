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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_cuoiky' );

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
define( 'AUTH_KEY',         '8rsFRDn7cD*<pdYa}sK,1ajnbI#o29<},w`)E^E/_/s{A`VdG{o~65l6@k4MUfE9' );
define( 'SECURE_AUTH_KEY',  ',JsN &E.}Qy-g^/}LAC-hJtq-_7[%lk^l&g/*-uH7m>VeFC{2WOp$C?llH=y]q@~' );
define( 'LOGGED_IN_KEY',    '~]*`V+6Q][Z{m:trD6b3{O:T4^UcEd[GsUKWz&%<*hymjpfP0MDLCY.:&n49}8KD' );
define( 'NONCE_KEY',        '2)%l=TT^jdqNt65IptwQ5fIVX,P86As<t0g5%-#l@bZC8m?id3X~ijv7-;#vEiH_' );
define( 'AUTH_SALT',        'LTv;WLE?/sS)jY)SPH prPP0`tRc79[s,s[UL:Ag QlVLpM,*OSO4v*L1%/Q`,<O' );
define( 'SECURE_AUTH_SALT', 'o&& f^Ah!6`$q0pKbm=xl[B3aen4((nBBjK.l(mp.G^JNSWyoJ[,i~7TY7QLzS5u' );
define( 'LOGGED_IN_SALT',   'Tf^>wravXHr:(BWc-euv;tq :}Ux;_z5uo(DAbf%bRBK^%Ym,wl#d{~|J`S%8!M<' );
define( 'NONCE_SALT',       'xTw1l*?#t4@FMXWX^5F|m/p1$6^Dh}|y!HIQ[LDr?yUnaXj)5FRAL-!:C# #PUt&' );

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
