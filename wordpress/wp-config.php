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
define( 'DB_NAME', 'REMO' );

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
define( 'AUTH_KEY',         '+penv]%hu 9r$s8+YTNVsPH>_%OgP}C}:(b@Q!I~U@Co3hTU,[st,!=F9+m1i@d/' );
define( 'SECURE_AUTH_KEY',  '4$N&0k7(3Qm0ye{Km]&L3Xs4I;PzCWZbI9KF4S1sh9%Ab-RZ9ll[hu4/I?wsn/E-' );
define( 'LOGGED_IN_KEY',    'EP[U MS }QQ0{#`$Je9{Pe&aC5>mRUMbo9,uU+)3:^1[]G`ie]K-X*hk$Z}1Y,&8' );
define( 'NONCE_KEY',        'kKrDL(?GX*,C?:3cil0I}sC5EJr2::-BrU0]WmZ5c-ahEUro^)M([VlNm-i8LG^D' );
define( 'AUTH_SALT',        '[[lwPBaSd|u?>E8umT*xk).M M`WY(Rs-^+2]G>~bxP(>~{]sT0~Ea^dtU,x]#]L' );
define( 'SECURE_AUTH_SALT', 'EV1)xfJO1b@JHW{J;|4tj$e7Z.7L{9F0^(SYJ{-2pBySBuDyx6LP`$dQ,>|Ll`Zo' );
define( 'LOGGED_IN_SALT',   'm=/!~vQk|zl&U-r+aoD2P;<8s5L#r9.{@B.c1=wg[@>T:^0/5iSF@+zkk[AR>,]Q' );
define( 'NONCE_SALT',       'w!Uh/sF@*_tXWArg%x{%bLNwL5&62BFnYPH[~WN$$p<}?x),P/w#!Y!EJ>94!]9Z' );

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
