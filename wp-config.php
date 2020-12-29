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
define('AUTH_KEY',         'toYflUyLl9Is2+AcMbMcuFIuXSrD6+4UJt+BmzymZU19OpzyQ2r+vjZ4f1lj4YPyue4DXVkazyXaEjpcqv8kFA==');
define('SECURE_AUTH_KEY',  'SMEFjaj/0YEjxaMjGMY2ylydM9qso/D2mxnNhYasX/uo+DrBlHfK+fYosPIaMInpAHZ0/7hKQCpNGp4w6EH0Sg==');
define('LOGGED_IN_KEY',    'gGOttNX4dzVSFUnLmcRSLu3PLvR6f5DUo/3r036PkpvJlIoWjkSlrSGD0xtfyUyH//mr4SGpzWM3WGSTKX7eKg==');
define('NONCE_KEY',        'RwpMK8pX8moigsxhsN9WaD85TqCDGLcgMEC4jpXH55uZSJ0pJX0oaI7HU/QlKJxytL7NDQVZwVoUIA7Ow/L4GQ==');
define('AUTH_SALT',        'mWVQs07lzkw4Qf7uDLhm7098Ri0t4vw0YSCDlC8oEwIkTDiz5zqf8z0a2+Fk6oOO9Uy8MVYmcIr/3jHlyjavxQ==');
define('SECURE_AUTH_SALT', 'QD99qjxRW4aCPAQJdCLPsJ7LaRcqplMW6FYwU65jRFh1iIx7QvAQ0bUlEB4M8xDxEBkInTvtwCDVb+RZckth/w==');
define('LOGGED_IN_SALT',   'OO82ajcQ++8x3bOd98OB9/KwXe0gAGobXmewg8LWbPYL3tttcKYzvEJ7/e/C/5bxpUYeuez6OXU/jOR6CTwFkA==');
define('NONCE_SALT',       'IPQbx+IHSfKY+HreWkfQOmbJS9qkVoSFfsLcigo/ak8Lz1ZRc9yWezlI3uNwCbSUGMBE/da9ct2++qo0HqWO6A==');

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
