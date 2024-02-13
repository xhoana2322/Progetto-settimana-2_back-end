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
define( 'DB_NAME', 'progetto_settimanale_2' );

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
define( 'AUTH_KEY',         'i59~yd!KK{nsz~<IzE+EECVBB2ouBnkphe|o77yb>2:<@t!)5OQP]%t.w9[8_];t' );
define( 'SECURE_AUTH_KEY',  ']ie,c}[6[Y$d0*H|%sd_[6). 8zA(OO(ctQVW>aFA`Ms:k}5i27uD3+HgYvy)[Xo' );
define( 'LOGGED_IN_KEY',    'b<@f-eXV{=9qk;;)|Dq= ;)b2mEG8@mV[v)6U_2H NQ^[HfvTy&!tZZ7+DC`LBQD' );
define( 'NONCE_KEY',        '9;OD$,+U1c=17@/UV-V{sj 7@X*4uL Y||d#8~k!LPWTu);v*m*(@y>2GB2!,Km9' );
define( 'AUTH_SALT',        'IB,;X;SB#PQFVXny,%U~W3&+YJ)(pLHKB/O_GdHw6/gz25*oG$p7q& zDx{9lvRZ' );
define( 'SECURE_AUTH_SALT', 'gA>Onib_:Ug/+~(8YCy!XjetB]ngWb[3?7UU{vJLDSxLYa4(RD>AOk Co,%]QC%|' );
define( 'LOGGED_IN_SALT',   '1yexiuYTc}p..2d:Z`7+$k|Rmbu=b&C)3i gOo^aCddA5qy!A?}.Sm,tur.ju3AL' );
define( 'NONCE_SALT',       ']TN,~S.Glpze4SbPI9h +F~q=t[6beu`E^!aZdM>]*H5<S.s,-2S;lbEcZnm|E:5' );

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
