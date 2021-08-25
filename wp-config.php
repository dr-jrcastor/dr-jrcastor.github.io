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
define( 'DB_NAME', 'database_aftg' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'ArBoFdwziRL$2RLr78{0cGZzm.bimPEh[9+[X$z#R_kM[GF>9>t`w/UhI>i_S5wz' );
define( 'SECURE_AUTH_KEY',  'c=dR(6#y,mH=(&8IGkE,6**)k{Tz;Tl5uQ:yD{oD4IA&_s=a>XsRy8Pac<EviM$h' );
define( 'LOGGED_IN_KEY',    '&?9[k5nA65GtCNh+szWz8&x+9.EMQna<[YA*d_Qi?fZ+;=fQ9b;#zK-pq5TeJI=p' );
define( 'NONCE_KEY',        'qjq8f_@^F0yg`qZ-@C7^{J}3KzW,j(w?g$gjNd:ULgH)DLrOf6LLw|69X$$MtAHZ' );
define( 'AUTH_SALT',        '6N/cmQ|~eacJ4Yw)2o]h]C_GruA)qfct,LM/P62(sobKYI?;/aUc0H-58-$.ZwY}' );
define( 'SECURE_AUTH_SALT', ' 2R0{%4=J7=d[^:}gWw,ZzHfaakLLFZg>X]k~{Ral=l#vc?0xXf`fD$^HR-k.n))' );
define( 'LOGGED_IN_SALT',   'Nj-TWexBy;%sD>?`hjVVX([_PNdPZ!|djkol)`5#{qy01.~h|CM%pv~mDwDT/M`u' );
define( 'NONCE_SALT',       '?X{l3$o7`-Vdr[9}.B1i0P]@]l~bBxR^epp#}vR4$p[} j0*Pf6hK*7fF9;o`g{z' );

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
