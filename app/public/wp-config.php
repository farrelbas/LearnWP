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
define('AUTH_KEY',         'V+r+w1AOkwY0+5pVeh0CmC/OqqkKKGQMWzhJ1zkQWDXSUT76EcFCtFfqcmdqCrtB6qGF/uzLiQ1kRPamCzOJbA==');
define('SECURE_AUTH_KEY',  'bJ4UM5Yw7/WK/C9VKi1nebNCC1AqsfLhl6sXp+puiCSqnTXyrg6nxciuH5K3YOw8ubbRrex5jK01y1oSRScnEw==');
define('LOGGED_IN_KEY',    'LfANk1qjoMS1IZZt+uEAI5KdpIxCfLsPgj5rM7gipRj0YZtABMdh7Q3+99mEnmgFl0+OdKuSdAgOWYgUPVJIPw==');
define('NONCE_KEY',        'XEl1M/92DBwZeV6uFy2RNUiJ7dLQc60QEdPsT9LDvy5Uk2jRioRjn+2fP+QxgDyO4Wju4ZFGqHe+l2eIYqPFbA==');
define('AUTH_SALT',        '0Tro0jlGfzhLWYNBJHlodXZMg2YQtqYY43+2N28QmMeFnZGjfp8IQLxoMRfYo4FZK7N5/6OrYEfx0nsiyCAjLA==');
define('SECURE_AUTH_SALT', 'xkbNfKilE5NAJ+6mBP3MSyv1RvghfMJ6flvQZGf+bYQVSZnz/tCMoJ7aqgYaQe6/LBCDJyNyPXUso/aRxOXBBw==');
define('LOGGED_IN_SALT',   'Bukf8hx0YOvymNcNAaY53m90/0MCLMp/GeveOG1FpWRqYV5hOzCyrxBSuRBKWT3rKa7oCb7TTfslRHe8f3nRsQ==');
define('NONCE_SALT',       'TBlgWpR/IsALwwC9Tfp4lnHd7t1u3YZF/RC3jLDVSzHQHNgrz/FxJA4rb0T+iyuXN+j2hUix9+GpoZ7JfhivVQ==');

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
