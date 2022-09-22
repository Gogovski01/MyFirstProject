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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'ay>Ty.yar#4R+a}0@eMc?-aFh<wQ<S7x#/>.hp;x($kjC(E>ARZ5JFaLl5F/Q[*.' );
define( 'SECURE_AUTH_KEY',  'TzzQg/8[+p4ZsGAN1)(+?hgYCR2ziY{)Ago:&Mh^6c2~[<9ut(wyW$>k{9SF_:w2' );
define( 'LOGGED_IN_KEY',    'K<9:,Y.LR1j4_S1+`2Ozg`?%sMamXTW`IUD@m]y~iv+f*CW]tLTgFF=._h[qGo #' );
define( 'NONCE_KEY',        'u*x86RC@S~6hZ*MEt97`B_l}F+`t*dhZ`mNi%(/m -3G2}biR^^T]]7Fk]KGSZcT' );
define( 'AUTH_SALT',        '0 bFdIV@J!KNQk U-37vY }v6 D/*(jF|=vwY;q#fG2#jKBHI7P~CwT[hFAIyP!J' );
define( 'SECURE_AUTH_SALT', 'sy(Np-~9rwpgMe&K{33-GAAn5n#m<`oQtF$6!vX_VZS!.+PO5oOGHRhlbbCnUr8I' );
define( 'LOGGED_IN_SALT',   '3tFxsw1#V7u&B0*-WN%(-:Y}#;?CftX{8CpE@7JefzzWyK})ohnpc7iK!H9kChtv' );
define( 'NONCE_SALT',       'IHla8HA% H3N`fmXoLUx:z3*Q&+4LJBaB1x6.&`v*umB(9e6Y_R-Q<tama;}~4:e' );

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
