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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'g7dRrsoUngSeR6xU3jmj5qOsFy3MGj53dwEr9iygFqBAIyuIZ3nJ3EHZMHQBb1jc' );
define( 'SECURE_AUTH_KEY',  'OXFj2ZC0PqoGcPSlNjiL161XcIdgVccnjsHM8yID7FNHtVzVXnaOpPAHdevtGYHp' );
define( 'LOGGED_IN_KEY',    'VclL1s4sxppNLvW4fCt2SwXupXsEOfZADAUUzFbkvUHOoBosMQSf3VPsdIuhzOGO' );
define( 'NONCE_KEY',        'NNhFOKJ6P0i00q0M7FelAYcag8so6FrYDPuTRg73SirmZ0c28uoSm9znfJvKYSzc' );
define( 'AUTH_SALT',        'FodzC3pH7SbuymmuWIZEiprQ9hs0m6TnE54S0R2LgFaUzH1Br0UwGliiiKxenVtA' );
define( 'SECURE_AUTH_SALT', 'CtbGCgCWyAeCfWg69Yo5rtr6vRNDZ8lXTMfqChvQE9taqxrxAmnzKD6h55q6PawR' );
define( 'LOGGED_IN_SALT',   'HTv6d6d3dUR93o7a0S2Ya2OLxYgrqXsqNqf2GsMo31QHVrnWuXrxrnEGP8M72h8D' );
define( 'NONCE_SALT',       'SMRH1QjL2cGr9vD9uZjYlcWZ5v5YepA5VwRbVrDkrYNXGDXIc7rUTcg9js1tizSi' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
