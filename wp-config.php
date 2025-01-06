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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cctvdigitaldas' );

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
define( 'AUTH_KEY',         '7|(syg]0GOvy6!L-5@S4E1+?QiW `4C#2+(J!o/L.#yotmyH1vK-5AzI3e|Q=4}Y' );
define( 'SECURE_AUTH_KEY',  ':RH;dJZA$lKkB$3*M)DWHB_ bA+d;uXdUSU0hTpaC4$B}rXpmdiVOIdZ_rt<_ikx' );
define( 'LOGGED_IN_KEY',    ']ra=tTiB&+/c.FTtK:9)&SZ~wVH rV{e,F&+XW<+9tk$zS)>)XmG ij+3Wa[0QUr' );
define( 'NONCE_KEY',        'BlkZ?:IKzX6v%,c hY=^)tk@+l8 OYj>F*_S]%tK$@wy4qU5<q:+Karx[PnK:]kb' );
define( 'AUTH_SALT',        'NyL$UU]nSzS%rSUaMC6mJ}4Tc{x oBQ IHut!;uQzk_|ddy L+mu:V]osjRYu!%A' );
define( 'SECURE_AUTH_SALT', '91T~;Now8l#bgm?A?diqa= 0=;Z3P`s4uDt4~kXzk{OP,-gTg.-A0&N=U:{d?ha+' );
define( 'LOGGED_IN_SALT',   'g+r8p~L9PBO}gMwzRTZ%ZWZpe#O EPUY>1T}1Xl9@,cp8r&J^sfXwW`W(::[^9$t' );
define( 'NONCE_SALT',       '`:wdYb53()e}V.@DVbg s}LN:J-Q6Vl.Ud&A@<FTJ{Jz0snJw<JGb6.M .tIVQt&' );

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
