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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Prototype-1' );

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
define( 'AUTH_KEY',         '_&,_caww643`d)6Xw*<HE&;tF,vrSf&p[5Rd+z>tUM-H`l:kTv:4aB^_o_#gQmR*' );
define( 'SECURE_AUTH_KEY',  '1kKpKPoIBY[mUATwNQUn`V&93SwJfc4hbkd/xKM%:}#[9=^1eOK5}n2v;1KsO@_m' );
define( 'LOGGED_IN_KEY',    '+D6$~*L>U}ZbO<yGu{_:yhZ8KaJP(kpu~wjZM>1iH;`<Y 7pQF8w0<Gl^W h1@do' );
define( 'NONCE_KEY',        'l*%VkoLsp0Y--g>*,8z:ZKh;zSUfY.O]&[HT}&Y!)Zzvgi*!SSM:4c9C]ZZsX8}3' );
define( 'AUTH_SALT',        ']Q`-$Y zz}29++@pV;`K:q|}E%<u$J3G[Tn7r(Z)?}oNWU!]6QfEi_B0hGY^KB!q' );
define( 'SECURE_AUTH_SALT', 'wm4q$*.HP{zI~z^nA~.]=*}w+IH@iPJt+2P:!CCrNmE*1hg:m:??V/Z,]Q`{e4aE' );
define( 'LOGGED_IN_SALT',   'p.T3GJBMI:1Krp(4!NSp(5K8V9Aa11hbv:8c6,bce1`zV+Yl[VtcexIgYkQ,j%&h' );
define( 'NONCE_SALT',       'T@ce;kuxpI7n@d,n]Z{$T6aXDKNEq}i.>>r4Xpk0xt9]4-Bm5ys):FI[<p>mi0uE' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
