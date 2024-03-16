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
define( 'DB_NAME', 'imorad' );

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
define( 'AUTH_KEY',         'Fa;mUI*)8} Hz-L`sU?|qt[#eRtwz1eHdPaJQ9fr,>;MI.x,)QbtFwj7q{R;.jU1' );
define( 'SECURE_AUTH_KEY',  '`p6&5Ztglgr:r{m?0#:(%C%&,Po>:DxZ% QcG8LdDHU}iER}}sTHs:q)]!3Bh[;m' );
define( 'LOGGED_IN_KEY',    'YQz;&CPcuGV$T$&29sPiss3G9z&nYB(J@S !.2Ery{ `YJ639[ XnSurt%LRT+TY' );
define( 'NONCE_KEY',        'pBT2,!QW@w_>~W$*%CGs4-$a9$r:.jq*V+[8KMz}imkZq.V8|3KxONfXaF^e&RrV' );
define( 'AUTH_SALT',        'v0fvo(|-UOSseYq1daVLfZ_IUu`(of:0SYjDRk11bz#0V36-VB~vHffXv}s<{O12' );
define( 'SECURE_AUTH_SALT', 'c1!,<:oO5r!T1ir|f6Zg].GdTGzR}o<BR:CDQTe9T6%$::Qi>XM[fwl:?xi}Ahx!' );
define( 'LOGGED_IN_SALT',   'GW@|rRsV<,*w?IeJResrtAy7V}5}Vaqsd+Im8m/lg?_SuQ;buW&t&]HtKEB$@t58' );
define( 'NONCE_SALT',       'V/Yd{A2MAio}Y47^fzMI|G%7DxqVFOU@VcV5Mp|Z_-~q#~EmwZlM%au*Q)KS2F.2' );

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
