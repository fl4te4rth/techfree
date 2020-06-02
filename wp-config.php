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
define( 'DB_NAME', 'techfree_db' );

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
define( 'AUTH_KEY',         '&^p3l{4zr:ZB<(QMGpC+sMn7gyp,7).E~%lz54aOSnArl((g}e$QqW[G[5ox|<Tp' );
define( 'SECURE_AUTH_KEY',  '=H,r}lq_IxG&5b4]zzmV`!^oJOlN%ryWprm+g@U,H>z=RLv)8;Z6HMlEY&92 77_' );
define( 'LOGGED_IN_KEY',    'z@cfjd@0Q%.CordEYd<</C(BF!/7Xlra]|*&o?!7R9saLY QXs7h+p67 5|`R7  ' );
define( 'NONCE_KEY',        '*saaV(zQ+)xQ]0c)*tQA|7oE-MTvz6NSAi7Vz|rBzsaR2^D.9`6aR9pxG2xYK<9&' );
define( 'AUTH_SALT',        'A{n_>GVqDyB1+~9-TF1&IPQR?ivwyz=6JO`BwY;MtC?Dn.f7E&VY%<Iab:+6=8qG' );
define( 'SECURE_AUTH_SALT', 'z,mNTC0N@eSbDFVJj.0[e+JREU^*sC 9||Fy~O@N{rZl=f)]1fJFERf@!Eyv.#)c' );
define( 'LOGGED_IN_SALT',   '1C*.=1C2+yGq$t8_66T=[1ZrIinG!&9r[{:yz,vf=Gx$:^P;Gys>cao;s)yJd2xK' );
define( 'NONCE_SALT',       'EA$2*_@hU8b5u%^D0~}(?8K/N5a55H.Fe*^8NLSDG.tG$V,+<u!kv6${+yCIJYUx' );

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

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
