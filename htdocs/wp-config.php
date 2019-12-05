<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'qJP=!#`V#P@i|cWSeHY?NZ!`s)EjC=+T6qT!#@@Ge!5/a*[p, Z^ftnA)cr;?A{u' );
define( 'SECURE_AUTH_KEY',  '{`a1>__G_4]y5_-ZPQcL{Su5ak$EhA(dD:s-l3i W3w!!zD.j*0Vy(P@}04*#aeZ' );
define( 'LOGGED_IN_KEY',    '6TxU3,M/fKw%=pgVOwES{{JGc]{l4Vkf`Vd?CLidvO8-]u:v[HNExX[ZTML>,j![' );
define( 'NONCE_KEY',        'dhOs%m2%YM_I p~,6&Yn3!/4~1&,}PPfCh[fA2ClegdL lcds#dbg514)R(zZhaY' );
define( 'AUTH_SALT',        'OSn<]N?7 ;bQ9|7T-0:i<ivL@}IOEt&Kg^{G^u@]ZJH)nl[$N1~N^46z(Hx_wp,O' );
define( 'SECURE_AUTH_SALT', 'f7=pE{Jrl/Trv7]s?D7^s#7r-<mzGlZnw98~E;bYsDld0 69Xn&</=.bGxaIYPgk' );
define( 'LOGGED_IN_SALT',   '2n]qj}>d9!RYl8J658jBDUl][LOv)?MCd*E8B_v&A!~#V[GpUOU~u6~`k%;4uAj+' );
define( 'NONCE_SALT',       'CFax}/67LTc0deufB[r5jqO4a;y&w>8<]J$1^t;.c>$9W8[`-.B@WNB*V=,2kKcd' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
