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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'S_yk~(H%Bdko4 }~,8qd]EH$M)C.H/VO02,6o}pu q~2e%t%&Ku.+poW/]8j%|an' );
define( 'SECURE_AUTH_KEY',  'iKj/)k~xP]VB/j$kn$34%p|9*XISier#?X;<QP:u2~$5TdO}eeqT0MPhTM]M*ct,' );
define( 'LOGGED_IN_KEY',    '^lD*.={4F^?-mcc^g`c|M&UuYe3M69f%gw}XWwqJ>qYKua~4C_7/8DffaS_7B5$f' );
define( 'NONCE_KEY',        'QUswnp=YLa/q8djlV(]oUf]/bj$W?#*B91f|_F)i<6iU(1MDERwsC$gV+R9@hB~q' );
define( 'AUTH_SALT',        '6jlP#gQ85Dn.laM`j%7Uh@R!)a.l%fRzo,7wzR>+&!]q(TDQ.MoH{v6Cr-)p~,xD' );
define( 'SECURE_AUTH_SALT', 'J|W[Jo%3TD~F&0X0H%W6>}$~SQ&9qz3!ZQbl.~bJ}~E9}15zas:ftVF9pDG;2 Rq' );
define( 'LOGGED_IN_SALT',   'i2$iX5e1~2(r2)O@3h52-oHuyw 0X1vu{lBp{/{YZLl#bG@pQRh[_[>r?8<<o8mZ' );
define( 'NONCE_SALT',       '%9-8G#wSiy1E{guRXJeaN{73.EjKwF:-jyI1[ldk[e0x1G KS8.TYrK!qetoy:#1' );

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
