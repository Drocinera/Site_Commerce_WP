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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'EpC{Nq%JXul-~=%[k/_i<::NKk~E/S$|+,L+i@@Me0_+ G99#9%-)Kt0<$vtJDZ0' );
define( 'SECURE_AUTH_KEY',   '[ck~S]QUoMVV@7c?n1R2p&[{P:*JDO|,nrjpIgOj8{NN,O!ZRR@tK2_nMY.n#~?.' );
define( 'LOGGED_IN_KEY',     'N/)O!ZzZm{)^K)r,YzU(#qCh+SZ1(d4X=6zAW<iw,6Shexpy%b*P=cC{UX.xn&w%' );
define( 'NONCE_KEY',         '!?;L6$Efz>bZto8CdHq`qV4n1j*qAR5u~%4R%@E%rTGN~Y8A~nph-Lf3v %i_*hl' );
define( 'AUTH_SALT',         '_uaMXHh/=H3cTwX9ON.Y7^-[l]sVnp9AL)zaO{4IBQY%4A.krPs9vNx&6BJRrGKl' );
define( 'SECURE_AUTH_SALT',  'Wq+$#1Z6;FxtrfGORhDpCc07V,55c&t`*/3@ixlF<(0orOtXAYt]E,GV]o3xUG$%' );
define( 'LOGGED_IN_SALT',    'yNMzwqG/?/8cvpef Ax+0/{fBE^e}q7/|M44/W_a[0{4jaI=J;gfS._[Qnn5w*%f' );
define( 'NONCE_SALT',        '9NH^/&vxA//_Jy_Ws2+]f*MZ&0B+/,NAj#3I5kEr3o=h:~Nd-S%qVV!#K=Q^3nGW' );
define( 'WP_CACHE_KEY_SALT', '^NfzmHP54tKRZFrXWXBX@}o,_%C)rT2d-W*9)xTv/X]]j(r#4a/UO`m~5q>m[U6e' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
