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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'BusinessCart' );

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
define( 'AUTH_KEY',         ' q*-g#nF1j7i%da=E{5}T^tG<hF8-c7g$Ym/.H](I;J08Ywq4;kwNk}?zju`p*j:' );
define( 'SECURE_AUTH_KEY',  '06RnN]_9Pv1gGt.|d9-3?]7pPv$$]mbK31iNz| VdoO.I:Fag?c;9qEG2;]fxR.E' );
define( 'LOGGED_IN_KEY',    'kR?1ZoV7^u{D-#z2W}a[%0/[7l85 dznJ2`!;-^-gKv7!mNl;m2PPDAdU73r[@6I' );
define( 'NONCE_KEY',        'o&WljJ0E3i)YXkaf5zxS~Rb!JSxfy!n7]>te74KtgR9^@qZ0NquePln]TM<?.x`)' );
define( 'AUTH_SALT',        'viKx[+B,s3D7o(1*2dU,S1rbI,^N#L@6ck>q`6w9^dO]$<?A|t1G.H*;N/WLFViK' );
define( 'SECURE_AUTH_SALT', 'esX9PB+@P1LRnQnJkTF~q,=^[JxRU[XEOdivQ3-N|vHRyq[V`Fg`M$(w@|Xa{wcf' );
define( 'LOGGED_IN_SALT',   'P,<~TL)eh&V9=D>vb5#D<_:7t%B^gCDC@R&_-]%Y6[9GX2GXz5C>5dkL<U1.h4mz' );
define( 'NONCE_SALT',       'd8#L)3*3`=W#yS=~0YEvwP/,0@5)-)ctp1{UwY.[k B&t}aa:pV!eNWjp(x{)~n{' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
