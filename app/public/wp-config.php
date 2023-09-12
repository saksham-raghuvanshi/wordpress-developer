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


define('AUTH_KEY',         'nXxYX5yHiHmI34Y44EEipoOB6pmI/vakafBRtNzig43U9epuYRG1450S/K6RlHBqUauupsfBjwy36dy5VUE1Ag==');
define('SECURE_AUTH_KEY',  'wLG+Cq/lZr70Y3zs5a5UX8J8B5eXkVWEOH0IzFuKoNWpz9rBXpSUPZTZ1YvsIf0RQ/BYaoG6fPdbkvG4a5SEXQ==');
define('LOGGED_IN_KEY',    'V5xmME3+BsX/YDdsrXYjA+JNhGyeDTHH/wk1BINtXwvj9TVpD/EP0xgctNT904we2Cpji/KJIQWyiJZMJaXsxw==');
define('NONCE_KEY',        'iciEQ+081jX08kS+U9QjafeG0yOLePmX8tE4EH/GrH1Axr2ZQZanH1VqLfxQpMtYuIFlziJtZznply8WNPkzLQ==');
define('AUTH_SALT',        'bjPE/4MLhkIFtk+P9y4QW3S5vr5HKdGdhL/26RYntPp34YPcTjbCB5504jMiuc2AwGsE5dlSsj5YmzWa86SL7w==');
define('SECURE_AUTH_SALT', '8bVHTaPlEFwwSqTCitBjNxlHlhi9lJdXyGJSORgcNSLl/KEXXVrZAX7KQ+I1t0BVFa9fzw4TV5OtVigHrajWig==');
define('LOGGED_IN_SALT',   'nWFQ+1CEfYmpIpyeQvqCTRYVcy/n8Hd2IcFwyClE9X7sIPjRpCikRqQtoyshe+gmaK+s4B/PDkosldg/Z3iZcA==');
define('NONCE_SALT',       'QmCCrAaDgVF6zhb7jWPLYQsVAm319Qy366NyLPojG1sK4EYrNZA9cRmE1anr6cRp3fpWSPi8YJY9UjWo5wzQxg==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
