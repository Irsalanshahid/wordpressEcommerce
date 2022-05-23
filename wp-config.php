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
define( 'DB_NAME', 'astraprint' );

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
define( 'AUTH_KEY',         'O/u3c}z)AB{k[X2Q~qpAR0zvc=srJG9G,]dC8V;7H;KAEIArob.Im#H?-!b)ReOo' );
define( 'SECURE_AUTH_KEY',  '`=>3ywvh@&u.D]sk|1g|.(pS[J=>c{izODt.+1@K ^g_+cb5D&QohHk!3IEa[e@R' );
define( 'LOGGED_IN_KEY',    '[T31M|sCk0h?Cr9S2_?vR7PKsAxr2I1l%~(oVox5>Al;k}}XZ<fW7$K6tduA=#~(' );
define( 'NONCE_KEY',        'nFD:,@0xWV;{t3St77$Jz{}(Gfs*m@|4$|LhEvx/nrvOgEih@2Ph`KhC94A4o9![' );
define( 'AUTH_SALT',        'u.xvR{Op>}k@gOz{78C!`dhynT9gf^t5L_{>%XZ{)3QWI4C$NJdE|!wrR!Rnz)%B' );
define( 'SECURE_AUTH_SALT', '/hB2Q^q/Z|j%E4#|A<SQ~Lz2($u+WpUJdWMmI+9|9$miD$<#W$$`JFM~f6bl$/82' );
define( 'LOGGED_IN_SALT',   'GMmd{h}o~Kx]}9,O]S=2]Smm&foI]=J-2Gh82;j$6%$*^Cu0%$3:/Ert9i4u`Kz&' );
define( 'NONCE_SALT',       '&@k;&v`gfh|BK.<,4e1NQg^y<uh)|}70Nr*XGlC0iZI4^,>krd@36m*EwO|4-I5r' );

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
