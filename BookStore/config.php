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
define( 'DB_NAME', 'bookstore' );

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
define( 'AUTH_KEY',         'unFN&NH:a^$qh|O {nm]Ds?c|P31^3~G-rAy:YvIQ43`g&V$m;{+F(eV8r`~0<d6' );
define( 'SECURE_AUTH_KEY',  'Ea&05{ol1)`t #7K@Ic^-3U~:899YQIt`gP#C~0Q)&Dg.nA7 [F/kPvtIJv#8?cq' );
define( 'LOGGED_IN_KEY',    ';P?YO4A?p}8hXx]%zt<=[;#;blNXDmY,[a0)P;qZ`0>LT}=aE|~?Wpt5Z}wTb}-k' );
define( 'NONCE_KEY',        'cJy9IL!c~.G2kWxJnRW0f=(JAMV7u.KY#mQ7DzR:nEi!HExjM3Z2k(&sFGv^it};' );
define( 'AUTH_SALT',        'L[T g[m&H;8_Zlam(2m;]xUm93O=#F[HRazIlTHkH#K^o^cu+QZ(nTy$YO2cT?Np' );
define( 'SECURE_AUTH_SALT', 'dzb.P]mf/FFp{s=!(`Y9cVZStn% f;SzE/E62]1Y=ai}jDZ[)_V>!7s91V*s+T_+' );
define( 'LOGGED_IN_SALT',   'mwn+2)3;JPYqz;l YmsYPKUu5X|.%z(CGZDH}W`FCj0trVq/K-o 3<84k<KU8YH^' );
define( 'NONCE_SALT',       'krYW^5Ez}S1Nh+E]OOjD}*s: K7G`95h`S!F1v#KB(diojrSMl&NcOi[0cuxP;cN' );

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
