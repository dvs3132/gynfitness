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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gymfitness' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'L|-<L?P>3{J-I;dp3=j^/VAo)1N*}65cBNCw:{c^7m5]l2D/G.tpiqyHj/&S-2p2' );
define( 'SECURE_AUTH_KEY',  '@{jbaI{(l[}jJ97iv_GWQ:SeAV}b}<R>h=wUh12$>ugAw$Iua`RfUTfSy?dPUbE7' );
define( 'LOGGED_IN_KEY',    ',Z`E_K`5p;Vqyrjq4bHq`F]MCgp<%Z+W}..;L-L`;W3[>e1rc,< U&m5jOXcV^JO' );
define( 'NONCE_KEY',        '75#*=||) 6?at[-j.sa -.vr58zmmVGG~NGjGpZJ}%qx)!9?d~ ,.A<?!),er! h' );
define( 'AUTH_SALT',        'k*![W`i#off/SZW~nw&GMM~ !H1gVWKgF+vgi2-23,YM>h&Zx}6%agu* 2tzBR[&' );
define( 'SECURE_AUTH_SALT', 'P={P_:8a,a@tmmHGUq`S?(2V~v1(m1DO{sBeN-Cvk*H5gWi):i0N)mu0!. 9JQze' );
define( 'LOGGED_IN_SALT',   'kF-S[_z(=GBz)|E10wAa|[=]%JS;,ExS!3EDB)Mu_}=xdP[1>?l;/<J^O?ouOiB)' );
define( 'NONCE_SALT',       'v=L|<~8Kr=|3v({xh[Yw0w`z!_lSxLY`q8c8S-dr5F1n`8}TaX^DY.*5t4h9B$M@' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

