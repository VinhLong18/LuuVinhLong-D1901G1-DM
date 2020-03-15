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
define( 'DB_NAME', 'vinhlong' );

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
define( 'AUTH_KEY',         'l8!SDk4+yL[Ki;c`zXc3yA}|rFD}k&1~iGsnZ:~ 1cL{kku%KAv16+J$}KoyUWq ' );
define( 'SECURE_AUTH_KEY',  'XPb8~5L(6j2f4HH&x}<e>2Nw9Nm;zlx!VTI%mQO?UzsuXeZM]nbJ?Ep2:7G7oM9U' );
define( 'LOGGED_IN_KEY',    'KpwGbTY^+6;%GK|:LOGc<=x7W%=;*:?</T,j!Jv7$`&_a/)N&I4~]ecf@TS]Df)S' );
define( 'NONCE_KEY',        'M9^/!|iO~::9{3;=.xmpG/*$gMQZlz6-g?mky2CE).#s7wn<hyyz?7u+#gkcQ+2`' );
define( 'AUTH_SALT',        'W#b-pwayp[uGKSZDG!1_1a-[!tUD{DEudE^L{|~_#@EU#=L:>?w _7E!|CZuoa7i' );
define( 'SECURE_AUTH_SALT', '`V9n]z=(I,6bhZ.4Le,tCQ<CLtQ4rlY6d,1HO0z+^$,COZ9*$w-JRTtt2$g4|2Rn' );
define( 'LOGGED_IN_SALT',   'XR!:IR;?mZd&njQLo8l)}+6TC2$mzq6:,];JpEa/ifvqk0uy~.,t![iwajgipJK*' );
define( 'NONCE_SALT',       'yI*iq IrOd2IOJKLRn?_]YOWbuED3?Jw;^x>KT>!ag[8!(y.Ysz}.b7Hv-3C lj4' );

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
