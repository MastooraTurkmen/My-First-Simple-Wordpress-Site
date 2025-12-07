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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

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
define( 'AUTH_KEY',          'gls:3Y{{l#3!^v}J(>QIdytD7g+qu{rLv6agwTlGf`oP)So$E_rU{tp.XxkdC(`-' );
define( 'SECURE_AUTH_KEY',   'OTDP2}LR^huXDJ(-7AA1fvh48arAnugAA#:s;</pp4=$!LYU%sSU:L`D1W91UeJR' );
define( 'LOGGED_IN_KEY',     'jSbhoJkABztf;::I{=r64q~>P[iF7i#r| w@XSn`buVZ;#.md/Wa2fN.CuG4^jC]' );
define( 'NONCE_KEY',         '#7eA.6kdBwABf(,3P)<xoQjVIn)7s,hJdo&^8xM JAE3@~nC*cJ$=T4iTtAA@6OF' );
define( 'AUTH_SALT',         'wM>cI/?wbcQzMU5*AU6zZt=KIhO15tFJKv^odyZ8uqij{X=Qu[-CK!@dP]k&Uhrx' );
define( 'SECURE_AUTH_SALT',  '=QfLif;&2 L]UbKO{ucliUweANss$(>uWxC7$.%,WLh#qgh}BtVAHIN-}=_U,9!w' );
define( 'LOGGED_IN_SALT',    '#kfF^w>Aa5Q^)`:?Il5iuM&*8`Gg{tX g(srHkO^4[ZrOp[BxKBjh|,D2sE:Lw<a' );
define( 'NONCE_SALT',        'wRzUjOg`n[`v_P#,.~>H>[Hr2duS-C|+TRI~OtVET@m{PE).Cc^FJ537g~r7o3v+' );
define( 'WP_CACHE_KEY_SALT', 'B:eXy~*V-]oK(MehP,&yFCr?N^g~%]B4a^,?R_YxNDq:/gJuvVKK7[slL 3:n:XD' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
