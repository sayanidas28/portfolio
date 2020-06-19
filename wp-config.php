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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'dP8x@%nKGe' );

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
define( 'AUTH_KEY',         'j8[k=2!I0fpoFgQF5qiEz`JuB_J-R`2^H[y~SV|vG.H;BbPbBx{&dY%%L/eX13)m' );
define( 'SECURE_AUTH_KEY',  'kfA[/xJzp#Y<b`GsT<qxoR+*2T+cYWY~K3qbGsl)4.h*3LthbRK)euIiwQeU{d:5' );
define( 'LOGGED_IN_KEY',    's9!1~Cmz!}.0w !T8wgGXGR/-9&c{EttY<yLpY;kVxZ-vbcV09p(Upuw7 I*H<8P' );
define( 'NONCE_KEY',        '/Dr1-}M|iFt{1I#&Z,6a/&-7]677*ErCCn38j]Kz;8@Sy:].;$A@v6$fU-ZEb 9;' );
define( 'AUTH_SALT',        'm;mK(bNPfNh5Y<sAtUMQ+nrMgT@xa.Y~&R|2nHd3%)E2iF,QG&{-,,SH cJ#JfRL' );
define( 'SECURE_AUTH_SALT', 'k;h^;Q;dzN/miG8 8brg2W&Ej},NTmS;rX&f;IHF{1m_yL]94%W;iPe0axoA{{t)' );
define( 'LOGGED_IN_SALT',   '+nAP[@+|Olw|WfS=Ux)nlh|0)@1^L.-ohy%K8d$22U7[>UmgnVex!&dSW6QSh<@t' );
define( 'NONCE_SALT',       'z^`cRms~Qh?a8u9.f#UfdM;9ca/+<]%*@!`uw+qsX*5 @JHf.+#mm$St?z)DIgsf' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
