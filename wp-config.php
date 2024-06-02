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
define( 'DB_NAME', 'd9mics' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Bo97guS~D!Vj0>dX>&7}6T-Y^D$62+ReP&GCF&ix>;tNoQ~2a8[sEvK]j~A@rX:P' );
define( 'SECURE_AUTH_KEY',  '`(4?_b1(qcQY4e.F.=x!*d.]!Al_Fm0]+<_*gn~FItt;%<Z]^{r&j4hof&~o&xcI' );
define( 'LOGGED_IN_KEY',    't;V0>$_,FBeOd|-;G:.s,|HTz1cd Q;(rGJ(5uofd|:q)r/rO&G$7;&F.jS+ltLx' );
define( 'NONCE_KEY',        'LG&[_C^P{m^Odw[*QqMyz5)ZL86f<4bx/rfr Xxm)0c1A.&4?[$dE$k[4Y,Vvi(6' );
define( 'AUTH_SALT',        'q.AWbqN~~9DO^s>E{Z7wqJ:)7kiI5[t^Rl[B$#Ky&@7.w#?A=/u*=]^]BW|Vc)&%' );
define( 'SECURE_AUTH_SALT', 'wo-=mOWk(}_wwEisY/*SfJ^F1vJ4p#FFlIp&&SKt&q$&]gp=@Xb}u69_~q5?-bg3' );
define( 'LOGGED_IN_SALT',   '20zR=_2+>jVGuK;L~p@vuHr|tD@kp10dC-Et>^oamXT]V~50RG$|V{uD)1PWxq.R' );
define( 'NONCE_SALT',       ')@t7z8X=380G>B(r0-ZEp%EkQrh=5a:RQ8w9=g (>SwUlEk8otAxIBF2Zc%hSpSm' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'd9_';

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
