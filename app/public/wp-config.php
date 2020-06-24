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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '8uO2yO7Y4kgFVOBf1t5GzELjbTUShjxxbaFqnuzREZcqJOQ7NoOEl1IDakXYO8Vr6eNVGUhRWn8HVXmla3JRVg==');
define('SECURE_AUTH_KEY',  '7IZc1QVp5G6GAXe7Ytdq8VJxoQS8R9ZUR/IQOg97Ub/mOOHUohDk1Y5tbHnZujycVr+iVBRRtA9t9NIjbJu3Bw==');
define('LOGGED_IN_KEY',    'VYSZIeUq4/DclfiCXZ04MSP9Al+wRSDiFy1LS98RbcsVrLUm4xUF5RY+YJkpUYeFrAKL0uDdB8iPLBnxJB1cEw==');
define('NONCE_KEY',        'vHbg14l4mpzA4tNtLEgx1kmtvHvGCxKukIpwLqu5NCkmZbLcbbcSdymDiXhbx9fty1aqoBbt9Y0SvB7ntaTVTQ==');
define('AUTH_SALT',        'c6B2Zm7kQeajWkDkqzKdkPbNXDT11DR25bgX7uBmr1qpD9i08VjK16TE9X+mU2W/pc/WLKguL9Xv0jxP8PZyXw==');
define('SECURE_AUTH_SALT', 'XhiAhb/V+mFpnth5TkQ1qxZTurXm2CvobysnhE2gG0f+l2dJ9yvIPIgCYEf8VRJzrjelr0lUpAD2DRtX5EdzcA==');
define('LOGGED_IN_SALT',   '/VUD6X6p8qySOOSj0N6BDXBewppRQAXrYC1uUdKt1My17396YsC2zKZowuPwRLeuSjyslNxUTTD2chsJdj2FAQ==');
define('NONCE_SALT',       'UYckBB11wHLh5+XeT4WbYTMy8ZHbSx6CRpjTXOCcOq4oqPeOPkgJhSg4Of2F6S6bBnx8uTSX1XqmiyTZ3TvBNg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
