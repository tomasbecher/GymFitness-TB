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
define('AUTH_KEY',         'Luqtq2kA2xIYNFsN10a77S05e0X9aJ5dyBT3MOZxfULxTpv6ak0Jlrd6iuvw6dQr9KZiIIMqCGXRRd6EXw9NrA==');
define('SECURE_AUTH_KEY',  'N0UcZ8BrFbpxGbHcz3E0jLgjQd3Xmq425NDF8u7TMBAgtOgsCeNR0MpqeWh3TE7ADG7hHULe+n2ivLLYwRew3w==');
define('LOGGED_IN_KEY',    '/kOUPx5n626AQmydDJAOFYLrdHGTiyZmWKOU1RSLXuPp9JF4eTPFmHxrpmvukEWKpaH76Y7g4nEvUBh5+sf12w==');
define('NONCE_KEY',        'OOkb+mbxAUP4VrtqCF/x1CjoEgIWDYbBQp7uIff7Xh9jWQZQK8QL6X315v2XWt9NX/Whg6jixCo2jXsKaCeA6A==');
define('AUTH_SALT',        'MrQtdooP4xoNtuItnDaZAYa4RrWXRSlx1GL4Fmps69o73lc5EQS4bixGnvxP9DJhivotvoAB/qzxrJ0ZmqafKg==');
define('SECURE_AUTH_SALT', '2dKf7ZUCWqYzFm/9n0UIVfePkPz9mFyYpuSHmqm1LVKma7LpswNEcTjCiI92s6RvjewzGGFkrPx7pDUaMzfBLg==');
define('LOGGED_IN_SALT',   'NpNagnZTtP8W6L69Y2gN6c3pkcHB+2e7iDKe2SJHpI50pWxEnQwuKB+0wXZGnTmwNS1w4oppPqRa177ifR+EpQ==');
define('NONCE_SALT',       'AiISoRE/g3ir8yz/O9ZaNSCar7JbNE64sFS3uS7roDM8ajIpfORdQBzFdDcT14AJbAeD0h7BD2GI8oVQZaG+2g==');

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
