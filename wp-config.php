<?php
if (!empty($_SERVER['HTTP_X_FORWARDED_HOST']))
{
$_SERVER['HTTP_HOST']=$_SERVER['HTTP_X_FORWARDED_HOST'];
}

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
define( 'DB_NAME', getenv('DB_NAME'));

/** MySQL database username */
define( 'DB_USER', getenv('DB_USER'));

/** MySQL database password */
define( 'DB_PASSWORD', getenv('DB_PASSWORD'));

/** MySQL hostname */
define( 'DB_HOST', getenv('DB_HOST'));

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6e1ed6487993b2406caff629b29f66ab53bce719');
define( 'SECURE_AUTH_KEY',  '90790713b491ffac899b7a7003a3517df126af26');
define( 'LOGGED_IN_KEY',    '1a75d0de601c752d54e5a628ec815c5881c51207');
define( 'NONCE_KEY',        'c85378873ee9afcd7f4d1d94a4fd8325410cd0b1');
define( 'AUTH_SALT',        '0eea8da7c5ddbf2dd64cf2d50f376602d01d10bf');
define( 'SECURE_AUTH_SALT', '18c3c0ef403a7ae1dd1b7e363d1e6aa14a622ad5');
define( 'LOGGED_IN_SALT',   '2c8d3310666f067f7ff6d5b13b302a7d3c8b6a0a');
define( 'NONCE_SALT',       'ab8f840e6032a047dee14b22d651dcb187e0cde0');

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

// If we're behind a proxy server and using HTTPS, we need to alert WordPress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
