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
define( 'DB_NAME', 'newbotic2_db' );

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
define( 'AUTH_KEY',         'e_XJ#czvDLFLo7@Mjr.Yk<2gOH5/@u_D0T>[-~/?3@IyN,Ckt2Hk7X0po}203rS#' );
define( 'SECURE_AUTH_KEY',  'FIB29|i=1=N)hv@Y7Y+itlz}fQEhM8yi/<xMl/k|!/#[UqJ7_DPZ>Q~yDMWd#O]_' );
define( 'LOGGED_IN_KEY',    'ek@,KTi+Y]Y.eNAa}rqX|}8&B/4LxT%[yU{@(nQ;={IT+d6 >plOP<{ +f3I7&hZ' );
define( 'NONCE_KEY',        'T|L]CEA,,zHgx/J/Dz%z[Wr@j{QI;f[Q|s`nlUrO(z5+Qj.&s)G{c_SH|24!le/.' );
define( 'AUTH_SALT',        'x)a{>i;#(;MW8P3i<H<^Y[R:3;/X<`Pk{t|hksoA!8<]/W}zBqF61&a]x;@Ga0u{' );
define( 'SECURE_AUTH_SALT', '4dq@7Zd~&grZ2SP;l4?tfg@2y>Bz=M< AsEPA*G:J5QW33S;.gs;K$@CPX{Vcu)l' );
define( 'LOGGED_IN_SALT',   'H^rO[BVREz3C)-B;,([>!cz00hk8,Rq4o3.XxBIXvR]R9najobf*sxUG|}G/L5t3' );
define( 'NONCE_SALT',       'o+{3^i$YR_QiLrlPrJf4w=1E!It2t5G# Kl:6xJ21_kaD6[s$!K`:yJ!cZ<{J@`+' );

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
