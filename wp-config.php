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
define( 'AUTH_KEY',         'O*IkIC=;A7=]DAvIP7]RHMF{Xw6$Jp41u RE5Uh`}7eY+$gjjU-Io/;:~yF|Yqbl' );
define( 'SECURE_AUTH_KEY',  'M7oG2`0RM#qK)0be05<G.gy57lx$uE(P{AxO&?IA6fv=DSQl]N$[df_}4lXA9#W#' );
define( 'LOGGED_IN_KEY',    'rFS=G~=-]-[xvh/X45=VFK?/ Q;_i]jc^L`TDF902`Fpw<hi.ik)g8k}/GWRa6+v' );
define( 'NONCE_KEY',        'kfwBvo5l!,aWL|AV3~grl0J)cUsL<qG$1N<Dm6ARJlZ`ww+i%Tjer=Dy4[5m4Q B' );
define( 'AUTH_SALT',        'vi=v~K4/$Dz9,b5Us]XgP0n;P[18D7ITYbdAHN-BmcwyU_dO@wpF08BCD?t){8}N' );
define( 'SECURE_AUTH_SALT', '+`wf]/uuc_a$]9AJF|c]qMfH*s6V#Q|!B-;ZsX!/($=(R.r4z5*G$pj,;_`T2;{D' );
define( 'LOGGED_IN_SALT',   '1%O2<-g<Etn[)&4ql:-c8ue$2y`)sA1bPJQj2n:s>Ec4]>f?~HC,_KcDVnU eYrB' );
define( 'NONCE_SALT',       '@>YmLcz:wd*^8mxhrirI5;{KuDD+4T2(HT6%6!Wq#bohsuMwoJRQkE7AaVf9)h>k' );

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
