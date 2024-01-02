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
define( 'DB_NAME', 'site4' );

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
define( 'AUTH_KEY',         '(:HD`E]m<TJ:=eK)^rsb/z }Tt}ds{d)&UA?ifV~[%!Uj*4eC&h4{UXL> }y%2K:' );
define( 'SECURE_AUTH_KEY',  'nj;bdmQWO>/[YK[xWvfG4-]zDLKactRVC<1oaxj0[^wpU*h*mC8MV3dVcuNwL3+2' );
define( 'LOGGED_IN_KEY',    'H_OKu#^aW(TvjXkPuFi_:L73bRmRN5;Yn|zrkZo6-(eekX *WA2:D?.5:)VN9a?Z' );
define( 'NONCE_KEY',        '!5f55VnIECMuXw4Y#Zb7twEv5M_pkgU#9qVMQM%C6Mn:OSvP{hOI+wY*cl6~6^Gl' );
define( 'AUTH_SALT',        '6zU|W#}a8Mv50eh$NDfu94jAl#;YX7HkoNqU_c[JT%F%_s,Jd$-{=~9vb(qv?[zQ' );
define( 'SECURE_AUTH_SALT', 'I?>9)aO/c? J?LB!|r:IO,c}te?[?>p~jtv s (c0%L./O^z=p$U&H-sFVg|#]2R' );
define( 'LOGGED_IN_SALT',   '3n20v;C%)PK@lEE@g0VcGop0]yOJ(ms]DgdA+LJ!qe]5!hu69CIipG*?O=hkcCE3' );
define( 'NONCE_SALT',       'Q[~r,QVtEgGl>&Y.g-GXNhNTX[bVjO(Vt^7/|&pz9oN:q?zA^Wog)FiK-0@F@6Sr' );

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
