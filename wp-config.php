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
define( 'DB_NAME', 'wpecommerce' );

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
define( 'AUTH_KEY',         'SEoVR_bCoNL#,3VQ2AxU[<^294y5a`4NsIEse;=K= pK>V[e) wo1Bfjy[}UW_%k' );
define( 'SECURE_AUTH_KEY',  '~K#l(-Flh[~d?R8QfaT;SYFSV`i~/]Oux 4#MT}XplsL[/v[H04,.z^9JKA 5 G|' );
define( 'LOGGED_IN_KEY',    'h0`SqTR^}j;fYh 3++e]AUI81 &q!y gl9S(hlczKB_BeR /awXm`z0rU H<2[u(' );
define( 'NONCE_KEY',        '&Z|@{h7t>SMye zy`K`t#_uFkvF>PbKvG.?K}P9n?X64[n +1Ll>x?]Re_Xc$QHW' );
define( 'AUTH_SALT',        'H#@&Q@Q{^6Q}X(P10[2*q1pRmLq)^M7^CJKHkFaFG5~b!B;M ^||v;H#I{%cxibp' );
define( 'SECURE_AUTH_SALT', '@1bX22Qbc.?<UXxqemInZKA)W7a?UhI&t04LCv LvH%W%kLK{~*!a]>?h->Hgw3z' );
define( 'LOGGED_IN_SALT',   'A1McL0F6U!9_ooQw&8a$opPpt/mB:|+y@vxqAg#<hwLAoPwrI0?RQIS`ATM<eHUd' );
define( 'NONCE_SALT',       'QV>~KYx{YY5$d}&8#x?<mqCXT=RXLO70U<B`D(?3#kHz-bOq6>D,|4jx1t!1gPg;' );

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
