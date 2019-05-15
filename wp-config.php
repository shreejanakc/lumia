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
define( 'DB_NAME', 'lumia' );

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
define( 'AUTH_KEY',         '5ZfbH |xkJ{I&hCc*a8A:cz-@/&1T ZI?f1LW`M=*5.0VfYh5+W:MLIQMs@W()@J' );
define( 'SECURE_AUTH_KEY',  '`2@8+Pn|H.6(}#S2kJ>=K6rCq+/P6ku0@]`u<<MshNw|OG`;m+U3)#Dg K8s?HTO' );
define( 'LOGGED_IN_KEY',    'd+_NhGciy{{@F`63n!mQRtT<f-s.4(q3AM:>}Pi;&bp?0dc7^%6XPW08,6H%P1-c' );
define( 'NONCE_KEY',        'oxj8&w_J8#/NuiUdtRh,tOVrr9)lZ7jB,Jh`D?G1>E 3;caNi{Kf,(Q|Siy*UQ _' );
define( 'AUTH_SALT',        '`>>/x4&>{[xIJR2bu)MT_L4HPT3I4^:N7vmWa#&v%6AORst>D-&C0VM!5%@}K/*d' );
define( 'SECURE_AUTH_SALT', 'IcCq!>H:qj H{~b/]<r>_iR>dK6O|n3a,27!V]IEk$g*Yk$S/PMrRW$8*@}?{:j.' );
define( 'LOGGED_IN_SALT',   'ujx!)qm,kI32&wG@j&h&cGK(ozI$h#14227g6MJ$;ZNzZJCs&_v+fYm m_@hs,jW' );
define( 'NONCE_SALT',       '16sC~3W}L!qKhJWWA)=/]*[`wD!=Rz{H%lbNd|x{6_6/4Xr`A>VWCH.gJ~[tdGw.' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
