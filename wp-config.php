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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'brainstorm' );

/** Database password */
define( 'DB_PASSWORD', 'Bra!n$t0rm' );

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
define( 'AUTH_KEY',         'He%Wk(p[xLS [b+ BZ >B`<xy=eoAwF)O@Ie?1rH.?Ac|5JBGf y9C9HMl3jz,-2' );
define( 'SECURE_AUTH_KEY',  '#0FLWzsXF7{KVmJ_.1}Sq&d<ZMBfyp%)Hqu^/H,>8IncW[i$3@#6}8jKKZls;eq0' );
define( 'LOGGED_IN_KEY',    'g}]2-{={9g;J}isuN:z>nGYzE}Fc ?]3d5 EV2xm6@.Hd5?8kE5Qt?VI3])SR*#Z' );
define( 'NONCE_KEY',        '_s{4g&P-P=poq~ &&;56_l+VM$*@dz]0II6$hk%n-VV;P#7[/N=+O)A-edij8:MC' );
define( 'AUTH_SALT',        'nxhV1Fg*E/63<TLWo_bA..90^<f8D[xn;qo?[uO#NA6D3xGt8)}YBZvEVt}Fr[jI' );
define( 'SECURE_AUTH_SALT', 'cxk]X=xV89:eArKWY4W?P`6iCUMk5f^z{WxS)ddYR=ePnWUkZ8xViYA&Jjs@d7?o' );
define( 'LOGGED_IN_SALT',   'pH#s=`*^UCyJ2,g8GV<G#JP+Nvi<jz`C751?Av7W||t3(lC YlF&*.J.[/sgnhU5' );
define( 'NONCE_SALT',       'QOV.aY}r{d2nrE_m_Vq_Vn2[k%XnvSJt`.;==(k$4Gz-^<&l#W;b*:7,I%x+{FJx' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_amitk';

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
