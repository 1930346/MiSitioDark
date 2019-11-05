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
define( 'DB_NAME', 'mi-sitio-dark' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '6cfc7890cc1966b099b2d20416ae2827a174cd42fbe441be' );

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
define( 'AUTH_KEY',         'gO&Ks1-Wys^=VV/}dEGSF,*[SdW=Ee!E/:HIjkUYmU1<3<?5isy!GF}qBvoY^ePM' );
define( 'SECURE_AUTH_KEY',  'QQ91vjP{8pEb;F^D0tHLB0VQsv`Yi~-/>GvFa*lFu8@n&=_UrCRR_>[m2opzlM)i' );
define( 'LOGGED_IN_KEY',    'bw|I0B.MNT i:spJ^/RRa.Nz9|g[C&R=U{YQN581P/hZY: h$=BY]9~k7}NVk3k+' );
define( 'NONCE_KEY',        '}uze$b7=9 <IHv)W8`Bm|b;IdFUm3t9Z]/;@h*DYpE@l_83vRhJ%5#4tAx|5-En,' );
define( 'AUTH_SALT',        'w-FVwW;H7MrYX@r/X/]Eom0Pb?y_UtK*qQ.Rrvq4{}4#d)8l;1kv]qR.9x9@9?$R' );
define( 'SECURE_AUTH_SALT', 'Ilq1=7p=@{L.4Q3L&&Cj^2tl{+J[|KQTpTMJG C32$|N^ <U~>rrEDk]m.8inI1X' );
define( 'LOGGED_IN_SALT',   '@w.,[QG6UX}9z>>ZL|[HZ:fq|P:+,nG60q{-Q|bGeGOHbdf@@O3%[[Np8@Su(s?h' );
define( 'NONCE_SALT',       '=dW1{)@VHfHh-LOFpKq9j8;+D9UC{ZK A><F3~y;5UY9m!]i%!r;r68C~T%}Ufvd' );

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
