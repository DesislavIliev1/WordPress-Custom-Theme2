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
define( 'AUTH_KEY',          'nI[ SFpv<7!BSxl$Ldn`A5 Ul0{i9K$Qd@F]7_YMR}4Io/FI#M>d9yJ(6/C/JRmS' );
define( 'SECURE_AUTH_KEY',   'bjPb}@N1($plg).TPn{mqsg$jxYm9Qt6vpGz`#Q),gBTDrUXW1H;b::T?+QI$9iO' );
define( 'LOGGED_IN_KEY',     'eaodJx)e9BRM79R#37T`MmInIsu48<vC~2sCKexKi5s$@ZjTdraX(nN 5AK`8Ba{' );
define( 'NONCE_KEY',         'cZk S(T%:3<Ivi |@m#.70BoY^L@]AgZUX`jk^bThD5}a)bZ/e;g4{j{y9!J_P|#' );
define( 'AUTH_SALT',         'u[a,~S~2yY9+s>,qh+6()<ZOHb<vxYz)XEm98r= )w>Ynri}uG.BI^Xm.j98Q/:C' );
define( 'SECURE_AUTH_SALT',  'q`l>j}6b;Bxo~y+6umRi0@i1iu_7P]HpQ(tRq* EW8Ik=%5v$|#$;)H?&xG+-IzH' );
define( 'LOGGED_IN_SALT',    'I!9kSVkevI{){a{Lr>N<p)PhDG}f)a ,RoQig@j/!Obb|g;Fx2VNDWaF21Y&-*wp' );
define( 'NONCE_SALT',        '.N0cIb1M} dwQOwAyw(q[y6/L0x)(=i|6QNQ71)uY@7_pGDNQu,Y9T!7zjJ5ulB;' );
define( 'WP_CACHE_KEY_SALT', '|xt-7I*Q>N{Ohzn.X6+K;TAh=TW7j*uP4su=c^I^iYx-K<];d;#!c aERdr]v?Sx' );


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
