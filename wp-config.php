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
define( 'DB_NAME', 'softwarehub' );

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
define( 'AUTH_KEY',         '~E|?wNBI=4Tr{+XaLB__e1?]`yvLhBwIfQbM8`={DHZF?(ywk`]&R5xVOlsD[z`G' );
define( 'SECURE_AUTH_KEY',  '6)t }%bT>1@(aUIdp))U~+!`K_)]GKQgi>dNF_mN].Avj8v1:7_.4Z.,2w2Qk?kF' );
define( 'LOGGED_IN_KEY',    'g,CvO5O%S/67}[)R)~]`x^) 6P/@=&mkeQn8N;>QEr:O9Mc~?S)t]f(%>jXd03R4' );
define( 'NONCE_KEY',        'KKk}r/_TV?ZD_;@@X%5Nw9?I+B|, tA#dMk&_qXYl,WYaJU{@y%7+U~2nCyiYTt0' );
define( 'AUTH_SALT',        ';HV *AF/?Bz<CjfrGSyIY9&6 SoNw@r1wCc~#Zbz:H:(M8.!gp(54b)~ gIIEG45' );
define( 'SECURE_AUTH_SALT', 'UA:t1exzwAV{CY$&?@i>2I)cv5v:c!OHh1,6k$;]PrK9?KW#^3c(CNtIiw5wxzr#' );
define( 'LOGGED_IN_SALT',   'Tzl&9@tyjQ{_ZG~>OobCB!AC8%aN0u0Gf,KSQdc5~t)wm!9bh%gX&PiMYTTdv#mT' );
define( 'NONCE_SALT',       '[~u*TWguFl<a0Yw>K:`[(dsgk!-_FQ1n7jloV.%6mO[Xs{Iq@b-:b:&3nUi3IDCf' );

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
