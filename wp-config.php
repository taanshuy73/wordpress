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
define( 'AUTH_KEY',         'K+52D4S,O44jUOa4ITA0~uU6kdNhSzLPhle,-**57ID4rH>fiRmyEFl<^Ro~04Y~' );
define( 'SECURE_AUTH_KEY',  ']+k?%%AVD=X)YOQ~SKPJh$fa{E!yB6zBO6S:[}UJrai|qj,iu&R$ZhUDv&z@LJa(' );
define( 'LOGGED_IN_KEY',    'F$pYhw/A4,K4DF}ypt3LQf(q1Y*np9[5dmEQ,mwqyzd<pV6p&+EtaMW;!%zk6x5i' );
define( 'NONCE_KEY',        'I=1ZG?pIFSy+kP*fWCB!fn O)`?bGL!7qilNH|=V6/4+e7k+y(#BhuH7hX1`yXaa' );
define( 'AUTH_SALT',        'fc#+4&B{gOQU%/&5usu^^FB71m#JzM}o[[]tg%>%-+jktlfmx_P9^!60z`)DL+9}' );
define( 'SECURE_AUTH_SALT', '/&^vEE~_!8<:?XoAf(y*0|f2rGX1sW`&fH%+A&htuh:{R!RiFDDvR)(s75D0rmJ:' );
define( 'LOGGED_IN_SALT',   '{Ff7q#Mb_^4V</E|JktcQd24/TCd.@%42nC4oRq-D/]e[zpQ>4;>ybf9Gom?I.`S' );
define( 'NONCE_SALT',       'g?qdTG64&ryQ]r}Sdt;813!dI)fRH]W%$+U[z=J/RNdj;zq[hV@^I,x0s<h-JP-Z' );

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
