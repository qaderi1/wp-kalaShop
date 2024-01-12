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
define( 'DB_NAME', 'kkala' );

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
define( 'AUTH_KEY',         '<?*JKP&;u!+qj(k[]<RZw?j Tegn`c& DJ>:g@N`Zk?`x&K4AF|Cy{0$3GA<za6)' );
define( 'SECURE_AUTH_KEY',  'ly-|&FZb:2_k]C||5[egJR*{T(g^:LFH082Y<|6RCI58l6L3&(T0C!E;(Bd34+)/' );
define( 'LOGGED_IN_KEY',    '=gLjt=r.q,>kIm%~EAtT3iM`7uZ`|M%wRjRh8$AexIo#,9Y)J$cQd^FX^OeCb_C?' );
define( 'NONCE_KEY',        'MLZ&<7[u@]U:o K2>Jz}EM,HO9{z|{j;02q;?5/ES.%D]&~Xua.c%2?g,~X+%*cY' );
define( 'AUTH_SALT',        'u-ml2?#L`8pZwbl1:65j)c=I79>YYM%n.MXK]^%{JK797MdSJ7dSp;ez?h*ZF~m-' );
define( 'SECURE_AUTH_SALT', 'ITfkJ ]8W1ZuX}5|T~+fotRMj:Afd|^NKg$?efqSyQo Sm`IH!Wf2QV2_c]jf8?Z' );
define( 'LOGGED_IN_SALT',   'SoKL>cT,UKb:)c^Po9+h}/&?i(@pbz/!y_ }c}@l4Uk^^U.pCwX,Gk>$O_}Jq=Mh' );
define( 'NONCE_SALT',       'y;]_;w+Nd>s-xy~I|[zLu%k;gg d6^XZ~9Rr|E:sQ#pJ,CrYb0yN=53Txxc+?WW_' );

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
