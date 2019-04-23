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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress3' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '/n@$~HiRB=?/V1#[n8*Ze0/my%w_8SL{U5ZMrX ]-{?av6Y]be]_P=9xVtII3^<#' );
define( 'SECURE_AUTH_KEY',  'VbY`P^X;jguIEe!Z(eF[P0pX,q9_rK7ozYv/2*D!oCgnxZKWE5vmzqn}V4e4~O G' );
define( 'LOGGED_IN_KEY',    'eBW{om+O<)x!7ni$.l0ZKHD^8Y%!>Lcu)Rq{@/_q~!K=qGmt$4j%3s_e|N_(f>@-' );
define( 'NONCE_KEY',        'WvYb#bVCIH+W5DiqG,R0@TudsQ:9D464z4J(_*5g?jwNCwA%0:TPo;1F|Rb,0 [C' );
define( 'AUTH_SALT',        ',AvNn4#Xj5U/U6^n_y%VMtD.,5yjHP,+K2Rl`jt-cPRCTZ|_3(Lnz@{I6jSGz}lE' );
define( 'SECURE_AUTH_SALT', '@&{^NT{XuNp{rVsv7pnz@cIt`w+-C]<.h n5JO+uhj@fWf&p+X@_QiD|r>0Hm.iT' );
define( 'LOGGED_IN_SALT',   'gG98y`=xJIRXXwO@@W$|hkU)E}hh5G(~A/3EsWJ)Fk8;b:sBNlh(gp1O8^02ECPZ' );
define( 'NONCE_SALT',       'm :.@jfTx`M3D2X,]6<!P}T)OhNDd@:(M;54bMEmcT_K/yU&q^1diq$}n:aGI0_Z' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
