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
define( 'AUTH_KEY',         '1h<t }n3Rd*sY>uT({%0sYW-xCd0PNUf%#GqaC :8E4ocG(0~sw<#g(!>f^)`(W.' );
define( 'SECURE_AUTH_KEY',  '7$1zdHcP8l,)#[[wO*iW3[z$<p*d_$oW-8+=T-^R+b=]8%&wDcCjvH7c5}k`yrj<' );
define( 'LOGGED_IN_KEY',    '8KBTqU,Fz*[WxZiYY1_^.q0w hL8`$_ay/2z!=iD vui|y:TCj^4fp*8yP4v#^Ta' );
define( 'NONCE_KEY',        'IK/?rM.0MVa%<sT,,~0v,3o#Q*t,aSB>65;&bur06F[:D%c~**w6Hq(G2?X2gP#o' );
define( 'AUTH_SALT',        'PLZ~~NmFw;`X3pCpCq2^!qHn1%[%(VXvCkW93|Kk&IS|Pj?1*PxGQpr8V[)}27,#' );
define( 'SECURE_AUTH_SALT', 's$OD/w8tON50RZm0irypDVQiaz0#%=DAa50{t_U|1=Z+W;ECJWz3,*l_*/4u?kp&' );
define( 'LOGGED_IN_SALT',   'f(%XtgP?#)SWo e*M ={~Qm?f+{8Jz)<*q=,CArhYZ;(64TEF9yNKCeU0ODk8MVp' );
define( 'NONCE_SALT',       'BVd<E3ldRkX@<|f0Rm)]w/gKF_)*=5i`YyL-FtstHvb8^Hf+ZXZI`::)H{+<x0#L' );

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
