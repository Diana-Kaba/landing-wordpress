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
define( 'DB_NAME', 'landing' );

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
define( 'AUTH_KEY',         'DY_8]I6o R==*~n3Bw}:kq@5D4#cB_[qxlz8^suznA>-hdPq-maz94~cTj8}xP/X' );
define( 'SECURE_AUTH_KEY',  'z!<l*/ 8YyNAUCd6yg`t!S90x~Yh9E`hS7sc]rsEe#*Sn,&XQE:pQeo{u,aUXgnI' );
define( 'LOGGED_IN_KEY',    'xp:ykIhFX4)R=/X3&v#5_SASr/,vJHXK.]U0aq{rMEipKu5TBa.Z0=U,M,FC=Ia6' );
define( 'NONCE_KEY',        ',(ZVL|`e-1PNWD3?Nye1Wn5#A-M~~5#tB0jWmFEGCEGoUz(TT6iUH{ o1ug}QoFd' );
define( 'AUTH_SALT',        'L$d=h7NHo`UWQ@*(4&2+hxT@|Z[3w|_6woL!bYVo[;l(p/Tz5hQ|{kW`JC8B)cw,' );
define( 'SECURE_AUTH_SALT', '7{2.R-av]MEmaVbq$,r6}c1W^L@_,i-7aQphX{_3c>Gsj$ T`x6A_HkhE s</Fm7' );
define( 'LOGGED_IN_SALT',   '5$1~^+/;gccb4/j%D$qmQW!fBm;[$X{cm;wX0FsAqLv?&UV/Cq*Ta}!8fnarT9sL' );
define( 'NONCE_SALT',       '1ke_2p`>VpKT^98}&s44=uYtY;<Kcaaj_L{Nu,VYUo++wITAfSNY^iby%GP{=55s' );

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
