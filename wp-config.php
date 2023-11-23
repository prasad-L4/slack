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
define( 'DB_NAME', 'sample' );

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
define( 'AUTH_KEY',         'qdHZ.6;@wMHg6s4N({#QQ~G%a#ZDLQ|jv[GuZ5A[x8m=uxb1DHQ}Ghfzq(pO_/ Z' );
define( 'SECURE_AUTH_KEY',  '1e(sRSo3a93,Q2h&q)5it6K>0ahH}z i-,I8O#;+BY%#5A%RHg&yP|q[T;cTaox@' );
define( 'LOGGED_IN_KEY',    '>i?q*BkIVHZ0QN).DGLnD4GxTO!cGxH$z71P+k204xG(`Z0M*68q8NMLuNa6}zR<' );
define( 'NONCE_KEY',        'YO&wk1i-]$!8F}c6s#J9}P, +f:AlM684Wv8NR4Mv7o:js<(i!R.Me2s9Txe%UxG' );
define( 'AUTH_SALT',        'ug%NwqCV.?$7W/!8n JM3A#7SuTQx@h0d${n}0BQ,m}}/A<[]xK42Vw./MEyD/MZ' );
define( 'SECURE_AUTH_SALT', 'fM{j9d=C!UTTdI;JhoZ.<h}Kg=%![BjE2P%dKi22LqNz~o,G|i}?V3$mlry0cG[d' );
define( 'LOGGED_IN_SALT',   's~K0tGW_;0rJzU%cR </&o]uO,LSJ<MUS:vM!mKzr!O75<DO]`YDwB (hnaNI1|P' );
define( 'NONCE_SALT',       'ln/B4XPrO*4,n(qtS+fSZheF6&HHSQS:._f]D4]/wjDLAGV5bQE-&oO7.AsM5o*_' );

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
