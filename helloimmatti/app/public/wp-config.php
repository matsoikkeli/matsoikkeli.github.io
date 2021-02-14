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
define('AUTH_KEY',         '0DLNqmy7OLnupbc3FxbxiPMdZi5AgTT11rgItTW3ZmKtE9gAA5lnlAzdSohTklp1u4M1JUqTCnn1/drec+GxIw==');
define('SECURE_AUTH_KEY',  '6U2t8oN7HNJqRKgdPZbBSBoI2BJuIClSP+wWTDa1VvxWnhIV1949+nfMAAD+cCzqH0kbkUxMXIrpJIKdn0mmkw==');
define('LOGGED_IN_KEY',    'obMWiZLQfLZ7FhMb5ard38QUXAuuShGlV5FUH5wJqhrIParNmeI11+d3mgtsj2JdQkT4t4k7W20EDuzcQGsF8w==');
define('NONCE_KEY',        'TMU55+l8dGkS0Zr7sPE0/OJLLCFMCtOqL1AwvLimUPeoERx6+sNperN1H8jYasEcAMkdZ/xO8GGqckRabZG/dw==');
define('AUTH_SALT',        'YvEn1kNEAVwElaZrCJDmE5DC168b8BViGxE+kiChFn+AVRvv62wk4KNTg/dQmFeqwj3jOIpqjUnRErdUMdM7lg==');
define('SECURE_AUTH_SALT', 'BzoQU3C4Ym4oXlH6QgIVnKAM/7a/UnGevb5thyo4Wh+GBStUhQ00eFpeden69p11n3foEC5e2nubX8sQvA4OEA==');
define('LOGGED_IN_SALT',   'bYEhvrg8uxCtBacGl9vBxZvVF41PSFmu1sMyTXOacgU0vV76PZ/SV08o/q/6sK3o7wL4I2/ZkicD7ObCZ9ZOcw==');
define('NONCE_SALT',       'YR80VUbuDGG80W8LajHjtI5O4kYyASaIpPFyf7aRVBoQ0sxljCE3ml2nl7njQd5unR41J6oNNRzR8/6qutDl8Q==');

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
