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
define( 'DB_NAME', 'baocao' );

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
define( 'AUTH_KEY',         '7voStsT|ak/`wS];9}}p_gKB}.JUZ#>Rzgb]Fh|XKm]luI2C:U,?+(Mhb[JP6.ct' );
define( 'SECURE_AUTH_KEY',  'oNGp%mHVPW9g?$FM{Uo^U+keW&Qw;(a,80Qy?*d8WmY6[lHqmUa,;=Vgw0lhH!z;' );
define( 'LOGGED_IN_KEY',    'O5qu=!}5r;]KHwAY*M*_{~&yMi/`3u34<oEM3,7ZnQ]lIF=w$#0#%ihq[rRl/!yA' );
define( 'NONCE_KEY',        'fY?3K7a@n4LwA*%70_RmJt?SYguP-R*3Q0iY).q^fDm(7<)cOHDlrl@T*3}Jm:l%' );
define( 'AUTH_SALT',        'U6>qy e]UBPl[YO52Mr~%|;@5gwB@~)9I>TZd/zTzVV`nm {.h0Sag5zFf4b-u0@' );
define( 'SECURE_AUTH_SALT', 'X6DrP(Cy6I%dC6txdzmz9iFHZ(Hy2+zu]JvL}PgI6L^qhJiPBGr^Dl[]!t{FJwzv' );
define( 'LOGGED_IN_SALT',   'd|=$EF&79](VRL4q}zcf*EZ1ZteDv[!~dOh]wL+x(C bT/%LxJ[DCO8uruoPDh_f' );
define( 'NONCE_SALT',       't>(jqZ*[OU4cNdSb!dQ<R[;QfVhN;n&Qgf/3%(}vla_[iX>LPNk.Vu c|xyu:!sw' );

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
