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
define( 'DB_NAME', 'db_ranger' );

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
define( 'AUTH_KEY',         '#c57VWX[Xpi-/lP~g@=w-@~$ditT15^w2vfY2kdgXn;X#}PBj7rc0Bu::XWU^Ij5' );
define( 'SECURE_AUTH_KEY',  's_q*rF*t0jQ8;q[.S<b>3&].k<K#UIl8}Pnxa*Lg!/=3u~MEa%73 -pwRa!Xdr7j' );
define( 'LOGGED_IN_KEY',    'J!zI_rC.#xz$HJ/n![@8XDpRYbG&K9)N625zX;,0!?-#@&v,MbqIBr&zj+9r~^0L' );
define( 'NONCE_KEY',        'HT;^Umd a~`P$IqQ!{[/7|G+7<]_&l* )#3gH:W5WSdu/xZ0g<kdD=x:J9G_9YgK' );
define( 'AUTH_SALT',        '|[b*A~<kNZy^P}WGg}o{[VE(*F9|-iz@`X~*{GycSb(]HtqQ#w6WN~]1zX:G<m6h' );
define( 'SECURE_AUTH_SALT', 'k!}:~_I1m1beQ:lVOl}//`x)&g,e5Qo>4WP#q%~kriix U`=]A&u%WtoBg8|IItl' );
define( 'LOGGED_IN_SALT',   '2iVYS$q!;y1&r|lt.KKQ0Mj+GN>spBtM^NPB^UdhBJX,X}M}|Q}^@*itLiY/Sj*z' );
define( 'NONCE_SALT',       'xUaiFKyadT^=%@j]7`2b)xk]oAJCIM$VR*^l^Q`/{izN9YhpRUC!:T$qqp{1- K@' );

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



define('WPFC_CLEAR_CACHE_AFTER_THEME_UPDATE', true);
define('WP_MEMORY_LIMIT', '768M');
define('WP_MAX_MEMORY_LIMIT', '768M');

define('WPFC_CLEAR_CACHE_AFTER_PLUGIN_UPDATE', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
