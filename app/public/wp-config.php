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
define('AUTH_KEY',         '6InXECWuzZvpDZCHo7xrccAt1nwEjW0iykrkyv6LNVekGxqr01TJVS1ws8cwhmDHl1B26xE/6z8T0DZSBx91OA==');
define('SECURE_AUTH_KEY',  'iqNnRaqWH7syodJHgrEH1liIE12mLBr7LHKhyYXCDzWB3kgPkHswy8Qk/WtrjTp5b7z9mA/Lv5QOeT4gH1U3QQ==');
define('LOGGED_IN_KEY',    'rqVCAhk1A4JZfYOlmDoLc8dA0K2HYxxcsvYLw7whn/5ubk2kjR0MZCouCPnD5eL8rm3G4Dr5QxpM8wiYl2TsoQ==');
define('NONCE_KEY',        'DpFRCK2RxIm9hI3bGDQPNn5aKc6/9gxXthBrSrsinzEWUYd3x8RLVawBb110XWAdnucPcKiu6O+JTDCTZe8MhQ==');
define('AUTH_SALT',        'nHrpaSWbIn3G+/EWGZ+hwA6DOOXRIAtDY+sVhsnJX++4sKfIjLLBuWr31lTAaXyJn51/997sMTMRs6rXcoBbwg==');
define('SECURE_AUTH_SALT', 'ivkHGWvzqOZU7WwwbC3a4VRyYt/65YKQ2Dl5a2GSmF8KZjMEk5SZhth8fEMOdConT8Pc0dXqUdAba92F4FXjXQ==');
define('LOGGED_IN_SALT',   '5S6CNbgioKyxw/fSWOUceY/zS4uIGJjbmUHk/KN/vXM3/BowK3f8iKIZUaL0wYTy2dZg3LM3rf7KWSthTicJJw==');
define('NONCE_SALT',       'Bh9F+Auh1Rcs5MXOVmVTEBM/4pE7h+Tt/w7ez9r7Mv3bUJKvPjOfRIBYCWQlhbtGtW+WadC+n/b8GEqxUUSxTQ==');

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
