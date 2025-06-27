<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'landing01' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'KQZ$j~h&_g?dy~+{z+GC1I7W,oHl /E%@c>H-puM&%2nRvhdm<qeM[Tyg04jt-j{' );
define( 'SECURE_AUTH_KEY',  '05I%7FSv#N3hGE_[iY Xme>8(2h]_9t[L;s{8g66Zb:3^Yryh>>5G+p7]|u)n`*6' );
define( 'LOGGED_IN_KEY',    '/H{gMNuTV6An4G[>iGM=O=(RWG>}`+qk/HjLQAKeLUE~0`qz1TfhTm|O@b H^iLx' );
define( 'NONCE_KEY',        'rN(f5)qlz*.gKG 8rG6M7O.3Qvur~pb;$HZbJps0RKoki^~5fB]IGLzb:zps?h0(' );
define( 'AUTH_SALT',        '|_Rg?1n/Q%O?6;iAuxo!Uo,n[}vhey-|-||AhWN$)p**uU5cu67W}kMg)#v*CU{1' );
define( 'SECURE_AUTH_SALT', 'iJ5`@L<BX=3G,S]@lN`47ps#3eqQeCN%`m78GD_RAz*k,[6Xg);K3rGjjiP~6igr' );
define( 'LOGGED_IN_SALT',   'z#)Qyy,L2T?N,`D]Sop:|P~m5P($`jY]eE_&ubx[b6jUL!-FJ-Uh#357bz/WN-<T' );
define( 'NONCE_SALT',       'x~/6Q/hdKZs|mKI1y2<&r,pRK9~K)tUR(yYgOiwBppMT.9,=KCV W9^ {{`Vu!N.' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
