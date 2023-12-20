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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'test' );

/** Database hostname */
define( 'DB_HOST', 'db' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '`J*X9S~EiHhGSf`pZgb^N@b#M1n2b<GTb9{TO43HnS|KyDh;aOjPhF)qs>?LKZv0' );
define( 'SECURE_AUTH_KEY',  'w(u<nbs/yjnNI]yw d2}2/V~+v:l1L[b4E$s3F@d.4GsCF;]4(e?iIweTnEvCtUb' );
define( 'LOGGED_IN_KEY',    'm2hpbjINFJ`b-%yr@L^Op&D>1mFv%4ZQAyD)<3hNUfWdJMzPI:dR(dR^=6<oraQc' );
define( 'NONCE_KEY',        'PUy6s//z].C3*Y@gMK3@Rfku|caCN7q(ctXdjkuN)m3cr# igOE.2FYHJqFxd}%i' );
define( 'AUTH_SALT',        ',jUjz`V*Vxk7Ks~.Spe4-[;?GKiqsAv5ny8byCp`9%E,1f8YNMMhGWv(fV+uw(c%' );
define( 'SECURE_AUTH_SALT', 'O#sW%T*ecDw58/ %umN-]Lne.LsiN2n$M?$-@x$Y+qL.q>!a7n%6wjIX#;qi:!n-' );
define( 'LOGGED_IN_SALT',   'l_.P|}B9&e>%o%rU*sd-~l/7f0M6UDTQ#z_&BZ->.u@RX}fG~vi|R W{s)*K)ys3' );
define( 'NONCE_SALT',       '$z%{,3.<HpG-?!RA[I MvfLc|Bvw>f{0lkC_Rr^W;Z!#%&F;j</t[lRMFZc9HF5W' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
