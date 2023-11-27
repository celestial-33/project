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
define( 'AUTH_KEY',          ',&4qKAq+I;*cXKU9jJ>I>KNm`MNxu]p#d=t3Q:8d?Z$:9yAtLTN4gBlp7tC5$EcM' );
define( 'SECURE_AUTH_KEY',   '[2/?H*<gBf^}]S`IPI<3hLE3IW2!E:oO%EbA$ga1^w`cJtN{f2!%YiMhh?<ne]Q@' );
define( 'LOGGED_IN_KEY',     '9y^Uv`|>p8a4tUsX^-L+*TN|7KJO;b=|m(L}K mf$S@g#mr4H6dn:tF|zYkZNM1Z' );
define( 'NONCE_KEY',         'ph,$[41e0GU[=41GB1/| }[[oh=IlIr-Agf`aQLiVjUa^<`j2|bHv<i4UyEidG9)' );
define( 'AUTH_SALT',         '/W|x{eHNvo&Q/lc0?fP7MO47YG#^jC;U@m6FMh=$NT@Aix7aYW2~+.,.6/<@kY>=' );
define( 'SECURE_AUTH_SALT',  '?I_!@.*r/!XR9Hs<,)JH`,X7pzZjM6={q.xcu ;=&&<}MyD7gbFi6#Er%a1,u8Gq' );
define( 'LOGGED_IN_SALT',    '_/8KZF5dxZK8eejC={{;6p~8tFCdMTHb>)fI[q!^GKxF}`T!=p(HIFn#uK5z)9K6' );
define( 'NONCE_SALT',        '4Q@QUl%tL!c789hvUq1gr-*%1A:7THad9OjFKxMt)D4,7V?K:JgUh<ZB@z=&K{{;' );
define( 'WP_CACHE_KEY_SALT', '9ea3<7^Y9xjuTQZfbWc*+t@MM&]`HJGf2!J8}@SH6=(Q^MW![GZ$ qI!O0h{b}ru' );


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
