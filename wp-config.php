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
define( 'DB_NAME', 'antrix' );

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
define( 'AUTH_KEY',         '6A(oHmIt=GSoa0FSzfd]TTP.#5t}3/m7tB2Y=7,,{^@0KK(.::oT{t@k~ccloQ&5' );
define( 'SECURE_AUTH_KEY',  '73WC}k<^kawHw*IwX=SX|M]2*onT/(w^H-:$bpq_<|!AFP|jG#=^ ^z)%Y=>YQif' );
define( 'LOGGED_IN_KEY',    ')!]S^M5 {n 6$cGJwRk#OC&d=~1N):)&]:]-SReA1=,U];M{i-k?2yU4jI<:iD0Z' );
define( 'NONCE_KEY',        'CbZm?C^lGP.TNtHS|BJ>,>uhAWq+coa>oY$Sl?}zc`-N}Y{`i0h3[hEyQnMH@TG9' );
define( 'AUTH_SALT',        '~p-Hu,<Ym}0lkHw}w+Cbwc.2~ZMGAqJ35$+l/BQ!fZl4r#G)mRl~nn/T|w~>,xds' );
define( 'SECURE_AUTH_SALT', '(5zO<+hro*,+HTHPl|-<~Q6oF)1d;&p/d&+]t^sgITd~J<nb9U2ySj#Ljx_M31@F' );
define( 'LOGGED_IN_SALT',   '-Pr>]s:=3U39a|ELJKel`1bI`YlO)USGA4AN`[65bp4xxutcUxUai&?b{v!h3]KZ' );
define( 'NONCE_SALT',       'mwmC f^Iqlyi1Ngo[f3.zdbH .wx~l&r,5LMFQhD/g*voyE1|9oj;A>AasU]z;aj' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'antrix_';

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
