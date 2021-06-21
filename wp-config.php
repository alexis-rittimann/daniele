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
define('AUTH_KEY',         '8LAwtLM2TF54rEceiDZw/siIr4F0G/X5t9xFPjmOJC7jIyGDoji4NUw79eukZqz7YpEswXYPimjPSqfbjfDt4A==');
define('SECURE_AUTH_KEY',  'Qw6VokKKG/xJ4LJ5A1rtqAJ2aecTmQDRJnh5dopNsH9itbOyfAck0CaVeXYChH6UHzSnn7vripmGISaLEoCatQ==');
define('LOGGED_IN_KEY',    'zVVCG1DTR9QFgzT708CN7V0mTw3l3YCeNxcsKySo41MntinzeR1TEX5jxw6dgkpqrSOuLOZfdtMTb9/blho5Sw==');
define('NONCE_KEY',        'NjZAAaXgG1uBK7QCs3sYDHlCbV/bkytt9nrebTiX2op1oEPo8UJNbP5of45ue+c+ZtQdA/K9SXBXQRbitxBdxA==');
define('AUTH_SALT',        'UJhTPosG52v3TiI1j6vvsQkekTeUXEnm1RoIuFJtOq1dgUUejL1gUK7zECnHdcJkZ2GH5sHKwg1rhXdRUfcXTw==');
define('SECURE_AUTH_SALT', 'nUk7UkNK9ns+sTa/ep3Ry9JGTo5nGpZ5I2Z2GFe1VejV5qeS1XBNtp3R3Rk6/2B/Jkhhbv8OEEG/aaBWfGd7gA==');
define('LOGGED_IN_SALT',   'teH0boxFq7pTCJvEZCbiMsGrx1pihKQe0/+29OoRLUgSAkyr3mAchMHfn5cuwGP0/njgKQNPmOiFFUkCz/VflA==');
define('NONCE_SALT',       'jkG1C1J74QjoTXBvGiuzL1ak7r3BRKGotZ2VLVVxNpBs/Pd5SpJfVR2QzVs0dT6C1hbRuRhoN3pfdHINR+mVsw==');

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
