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
define( 'AUTH_KEY',         'Q2tzh=k+8,H2MyGHV;tUa#ksO22bK3YD4%KkNlZPz4piY(~oyr,Kg0,$(]rxd!Pq' );
define( 'SECURE_AUTH_KEY',  'uF,W;)HO5[wnz`(; ry|Csu`q(~^AOOvzium=C~(g6G4x+lQu</R|M5kw)Cke}D<' );
define( 'LOGGED_IN_KEY',    '*YtB>{o5;mD(;n2C9+Rj_@+*@Ck$)^~Rb}XAp4AaDVUCPK2&_S)dOAWtzJE`$B8R' );
define( 'NONCE_KEY',        '#K*b{nSQc:$1mf_6)[?-p$O#(csip=:LLEK7<<F`O0z@j!qG2kuBp=bSuY0QJ.Y7' );
define( 'AUTH_SALT',        'P4E,8e3|IQ$OrV0<-NRq-B|Xop#AdTv<ny?O%BXq@ih~W(VQ>%{uz)]?;@hx~1C}' );
define( 'SECURE_AUTH_SALT', '`UrO6oYD;,;:7=r(@+Y;z,x;S!}.;-u%gh=yWv,pSZme6h{a=dM3[irVB`g|H&bQ' );
define( 'LOGGED_IN_SALT',   'T!.N=+WFTut>(ptc.72n2nzYeh>X_OXaL9qMI9+TavTm;~}:e>-P>v4},f**s3xx' );
define( 'NONCE_SALT',       'h=Mn_}0?0{zI+7:?;%tOf-CG&fi5(j-``q^p$yv;bhTMl3.~qb8&w;pqCjbmU}1N' );

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
