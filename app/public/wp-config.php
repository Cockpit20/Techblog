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
define( 'AUTH_KEY',          '|G=LL:A w?wdP$D^E8BYYcc)T,W0lwDoMd/&7~U~D,ZxKY4f5s8|A@tmbY)V`l(U' );
define( 'SECURE_AUTH_KEY',   '~oQps]O61x$~f1(cKjQ*ev.n8JEbC7fP{)j}XT7rqi+:w:BS|`5AAwr0vD#o_};U' );
define( 'LOGGED_IN_KEY',     'n6.KRn;e1W?{DVsegH7Zz{x+iDY(}qAt.YfTLTEc$J&i(1Y^>*z&gtjw1{Wul4<;' );
define( 'NONCE_KEY',         'VQu|oHDqD,sM[ts+GCK_/)T{oZ{OJv2y^Keu<S*1eP>2M%Hdf{KeysN~S<S%oU~k' );
define( 'AUTH_SALT',         'h-%e1i+bL{=>a3aj%mDsqhQ~mmW|)v{!x|zI)&Zw3o_:?,J<<^TmxyFY>U#bs0<5' );
define( 'SECURE_AUTH_SALT',  '>8b%wGSG-jGhptPUts]NBvYy0`2HI)|[y4B}:[oSeOpVu1,TLkz10%|ws5>5!WFs' );
define( 'LOGGED_IN_SALT',    'PN=``$liN1)imfbPDQzUW:t--1YSjjc?z-*$KklfV.pmWKo:P^cSJiiLrfTSr#Yw' );
define( 'NONCE_SALT',        'pb:HHX24uqb4UBd.>]vUt(.,sKJL,j{hHN9>>#ttX#dgjkHE3i+1,Kh9`xK,5}@F' );
define( 'WP_CACHE_KEY_SALT', ',x7~X:[y]^A8hH70Z[r-BAGl[c7qftD]Cpj_vx3,4~K1w^zA!a!+r)U]AfcdceZo' );


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
