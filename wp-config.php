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
define( 'DB_NAME', 'dbs12729675' );

/** Database username */
define( 'DB_USER', 'dbu54282' );

/** Database password */
define( 'DB_PASSWORD', 'cos#!@$$6&%$' );

/** Database hostname */
define( 'DB_HOST', 'db5015585760.hosting-data.io' );

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
define( 'AUTH_KEY',         'IVjt$u)m0!-QI6$gTt1K7P0!i|j)9v O=@~;r7jG#0UE`b#xE)-w5(?HGlA)[0ho' );
define( 'SECURE_AUTH_KEY',  'odR3/A3A$Y94yjX/Xh_9LKH}xO;T^5hh8g1x909`g9:y%>D|wI19ewX_P3WVoKM#' );
define( 'LOGGED_IN_KEY',    'L$bBU:AQmhoVtDS|:=%pv|9U).L) @`Oe#KB?8@y/wD8Ww>si|!o^(-?wZxRS:z1' );
define( 'NONCE_KEY',        'kcJ!:eHuUEyH?w9PLbyT+X>KT%Xh:fYh!!/H_[q-eh2DHi]Q8E.$c5`H/Y3D`Pa}' );
define( 'AUTH_SALT',        'EA[]GJ2kgv.UL0;}B%(I0^a7qv27_nXn5hv4j&WJ`K[0#eBNp5::!(l|&gysLVz9' );
define( 'SECURE_AUTH_SALT', 'hWR3(X_!6RpN;GlCp$8sq7VjV8ArC*K]_S=2G!>F_nS2>[,9M ~0ehglm5Z1;0Zh' );
define( 'LOGGED_IN_SALT',   'XYvm,/8Qnf}n*=2d|g:ryU/vxSz=r3XQX!+Q=hs~PIHiZTbda<>:qw_&V TiE$4s' );
define( 'NONCE_SALT',       '<C><RkP%JPE>DMd9n-$.Rx{pxmK_NiOi&Bp:V c3k(yok2o]{qf0a%XZp4,E]tK*' );

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
