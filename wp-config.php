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
define( 'DB_NAME', 'helena' );

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
define( 'AUTH_KEY',         '!;p>!E+s2^U? ~?7;uHw^vLlR.HBlI;jFj*l`FyMuG`TGtWY=P;?-/oDOf-K5.Ty' );
define( 'SECURE_AUTH_KEY',  '8E:+VgJ||V3V.Y1xAao:I-wBkfy7SWK?>@YGlYD}caHj8r}T$1^2_-Q?bqHp|qn[' );
define( 'LOGGED_IN_KEY',    '` !`lpvUr$w _]IHEF+Egdd[D`n>H0NS2{SF]5I89nswmLbhY21+p:xO}SS&M@`&' );
define( 'NONCE_KEY',        'UE)8vQGv8_G$Tq3Eb9pm=d#M>0]i6IB@|&+ilPQ!nC0YU8)3|6&a(PefbVH8OcR7' );
define( 'AUTH_SALT',        'IR0K;Z#)u3fWxS;pn}cov~ |pVTdsnwcDOpyj/u4<iiEAWH[N<N{.ZzLap5HF;66' );
define( 'SECURE_AUTH_SALT', 'cT-IGf17^Y+{}^wk+E1;@%Ds_x0:x>|Kmi&vBB>`2j2mpP(O)(aQbq55(w*[xxYG' );
define( 'LOGGED_IN_SALT',   '?9*BMt*$?IwaX#x5PZ[[XM?X<LoS(O3I^uJ[=Xg@p0MK?(s@4 ~gxSu``%rPoO%9' );
define( 'NONCE_SALT',       '[e##oZ0UY5{4HJ>m8,f|DuUY|u=|V>IwlTj=sp{v!?(jy^T?Y9S5;zo<$,lwf3QX' );

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
