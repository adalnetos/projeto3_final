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
define( 'DB_NAME', 'db_projeto3_final' );

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
define( 'AUTH_KEY',         '/-VdKB#Uj1>(QnD/3A4;(eDp~8b9D#$LH~|8fM$kkq4A$;%n7w9I}h~cPeqbi= /' );
define( 'SECURE_AUTH_KEY',  '>X=d&-0+L;Dp-mYWwc3-8Do2f]@K)vKc9EG]=TaqN3@Y2H}OhVYU(:ptTMT)BN{N' );
define( 'LOGGED_IN_KEY',    ',-7cU---ItMNg<D85>vwD|ypyUN!QcjDR}E_^!ChaHS>S%&LlE4]NT2>x8jFH6T+' );
define( 'NONCE_KEY',        '20@n$1EY$B^f1BRti+Zh/ZZdj3+1{?;Smx?O/#X&qo6Ngc6pnFkG2`3=a5.7 HiT' );
define( 'AUTH_SALT',        '(k&cufhcR,E?7,^Kneh!G3)]*%;L`E)@kf 5d7|UXe)BhlZn6T::K{@pW4bguvp{' );
define( 'SECURE_AUTH_SALT', 'Hp%[T7}B%<7f.mt]@w:oti.(E5q]b$A0eR(]7^fn}HRA(iWk`%F$?kcEQ.Y8;OAC' );
define( 'LOGGED_IN_SALT',   'FakAa|.q8C~.Q^gHXaemb1Mzsd1Y V>:t`}wK&ttqip 1w%{Qr=K?EENQ |uHJ@u' );
define( 'NONCE_SALT',       '-$rA)wdJu+ir2:N;>hshwZ$T{^]vc@%[ 1+x*c81D;#9Oq/?:O!v*Y=EoxFdqv{X' );

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
