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
define( 'DB_NAME', 'toddnagel' );

/** Database username */
//define( 'DB_USER', 'toddnagel' );
define( 'DB_USER', 'root' );

/** Database password */
//define( 'DB_PASSWORD', 'test123!' );
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );
//define( 'DB_HOST', '127.0.0.1:3306' );
//define( 'DB_HOST', 'localhost:3306' );
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
define('AUTH_KEY',         'gpvXqTo>40-FbQm|N3A3XU,WB>b2|}EB|q%fgKktQhn[>Bd=.|g-PyQJ8%M-]G9]');
define('SECURE_AUTH_KEY',  'wj7m7t~QAI10j?<d-GYUGJhbW!NJ%,~|!o{eth0j<p9O.Z873n#VsjIs9&UBk1XA');
define('LOGGED_IN_KEY',    '6QqD?8+f?c}}uM6*Bq<@SPyFSBu8[SJ!CLi_(+K4.3|_S$UvdC@0DO{6Yz7KqH}W');
define('NONCE_KEY',        'c+_mZU?ETabpgWfSu5LEt[eoAJ@]oad|UEq(izo.#OE? AJ%<6m6W,*JFZCYq)b{');
define('AUTH_SALT',        '(-,UmI+[16n#<%c7^+Qw~j q*bIZ*Z7z4x}k>*:cO)!XV^6`.V.(sCj|H%j;c@kE');
define('SECURE_AUTH_SALT', 'z~v0F&YhjNl1U}Nj|H$)Bc5/?0)6GN{-zz|mZS_+f}:sZ0g5oLn:]h^WlW+2W6hB');
define('LOGGED_IN_SALT',   'Mf`iq+S(dvW-Wmp|/5}?*9y|[m}7M*QGPy(zj?0+PWyqc_3I}iT.RdJ+mK0!&Qj=');
define('NONCE_SALT',       'ZLiqq3luZt=f+6XK-a$@_rm,%/lx@.xsS39P!@C!oR?=mk0vH~7fR~N+[g|0ztJV');

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
