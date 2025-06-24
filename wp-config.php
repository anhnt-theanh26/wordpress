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
define( 'DB_NAME', 'wp-theanh-01' );

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
define( 'AUTH_KEY',         '8~tjh7J <_]W,n^`@xaNj*um9SB>ORR3Wr[N%o7+GQcY7$,j3,WZB1KaAFjG03fH' );
define( 'SECURE_AUTH_KEY',  '$FjKI]z_^cFXI,T}wkFpg?q4:xs0>Jx;;1ho(Kg,N2LzBjZ~U+^E%&2oMv&<?}.+' );
define( 'LOGGED_IN_KEY',    ' j&>WlBI-c1r&LMhKze%r^t+b<aFU7l(fd$>>6[3U[m*ueh`%XC,|pd~f,2jqosl' );
define( 'NONCE_KEY',        'X[R!Fa*+Xh5S-c)}z5cyQV|UGNVt~,U-|}ti:.}C:OuVC_~]rF-}7-{f@DM53;%2' );
define( 'AUTH_SALT',        'X;Zj[6[TBi)W3c[0{wkrl0u&M|K@Q._l97b{F~KM:d}n5:v^&2N_3FRu2Gu8}cg%' );
define( 'SECURE_AUTH_SALT', 'Nm!qL2cX iFISMN0&d?C@hp784e4~%PSi(842O^!DV%v0e>`0hVVT%,-el@KuQ`F' );
define( 'LOGGED_IN_SALT',   '9eEWJJ[iUUduU0Dhj@eqkc&a}>8+36$a,G9~toFBgINZlrag&1@(cvg53gMM,P t' );
define( 'NONCE_SALT',       'gftL([Rb,MgAOv_8@/S#84iZ!jd>[|zu}F>cudf3;+V=q[M>*YoY]C`fn%~:rnHR' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
