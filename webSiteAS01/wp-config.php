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
define( 'DB_NAME', 'websiteas01' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'kYp8/^|Sg)f)j7WH`~0KdoX8llo)vSS0N77eC!7r&V-`teAEQq1vn<<{7b8m7x??' );
define( 'SECURE_AUTH_KEY',  'GLoCUO.Q%EwV1_^D#s15kFol7#k_&19O #VXZXU6WL_UnH.mLdg6|EJ&EGu&+IuH' );
define( 'LOGGED_IN_KEY',    'Q[d:JM~SeA]N{Jt0dxa:f+0|OrWrZu{go*S6;Wr<,Qyvq?/LA/!l);xHGcB!Mkg1' );
define( 'NONCE_KEY',        '+(< lop= i(Zp:?nqIy*=jB&eQp,EqIVO[]X|}hefd.TgyQ<]2{ /3=O5<p. mvF' );
define( 'AUTH_SALT',        '3s9~/3|BS(^Iuf5[=7-X(d[E)qv]w=FH>$LZlWF>mxRtO@[~oui_]Vun<c1XZKu,' );
define( 'SECURE_AUTH_SALT', 'Wg|B9]e:~P[n{&#XP0s)_ul{A[zCV5#7W|<lEshtQEY<{^H;MlTL(vp]Gr<[%(6r' );
define( 'LOGGED_IN_SALT',   'hq&%!j/|b5{m-3pZ0&g98oxE>;C[bzMjHW=5D(N0 dB@*9}O=dO?Y$l!1<IbH{49' );
define( 'NONCE_SALT',       'C[RXPglLBjx=x@rwg@^q~$5=jD MRP[AGPRe#a[6[e:FR+#=nbFh)w{Qm<m)lFCP' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpas_';

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
