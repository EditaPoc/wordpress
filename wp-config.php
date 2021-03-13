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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Ydzbs%J#L4px4*$lw]I:TOB9aZgc$k)j]y:8)0|xv}$R|^HG-Fc_AJg%3pp6|Gym' );
define( 'SECURE_AUTH_KEY',  'h3eV;;V~~q}8#41VB>f#f?#HzqyIt/&YZ_Y,C)C;^j~r}OV];Fm@` 2P.I>H?L,u' );
define( 'LOGGED_IN_KEY',    'Ev<3qYQ phN{}Aq41^/3x5Vamt5|(lZM=.S7w{<RcqCE@o5wqf]p3qyIL}y)bzqn' );
define( 'NONCE_KEY',        'yGzWvA;&_T*GyEosXc7QT|iQst@KAZcbFWcL{K|fl 7L`rm4T:RQTE$o`|WCw*WL' );
define( 'AUTH_SALT',        '#E]Hd$`#t3HW {l=:bmG|xl$~rz]4a)0ry0[z!pz!b#Z^J7gt[!{HmU+aumsI2`p' );
define( 'SECURE_AUTH_SALT', 'e,>z-=Pdl6%+9=$zm7n2$k9fM/D/(^GQ.MLLy+>/!VVVvGxAPM4M;?X789}qt6rr' );
define( 'LOGGED_IN_SALT',   'c%){$UkDSe}[;r=;P]X<y*aM7>VgmpY),E+]w4Otp8t5r.WU[YV[ux]2!.r85L$&' );
define( 'NONCE_SALT',       '9&?4_juAh).mhvX~FQ9h[W28]0=y`4]Ni#WlIuU<(FwmPT]nTo1fi{ZQ{V@20Xdp' );

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
