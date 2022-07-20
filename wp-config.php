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
define( 'DB_NAME', 'harshdatabase' );

/** Database username */
define( 'DB_USER', 'harshdatabase' );

/** Database password */
define( 'DB_PASSWORD', 'harshdatabase' );

/** Database hostname */
define( 'DB_HOST', 'harshdatabase.cnbwakbdzeez.us-east-2.rds.amazonaws.com' );

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
define('AUTH_KEY',         '^2_GrI>4w>%V,VA*Omh7q)gc:ZoA?PT-0&F>1s3gJb9a!.$mq%~qsh90|e;5pgII');
define('SECURE_AUTH_KEY',  '~e8 P-t-{*,4u-^cyH3B9KCX5UWt9`>1p|@#$}@Yft3M_ISb}0jL] W8!-B2XB|Y');
define('LOGGED_IN_KEY',    'BmB$DfK5YKw+%r~u?|p5/7(6=vr[ TA8CWe__$=2hBwDysx9a-h=^lT6N`4@!nj-');
define('NONCE_KEY',        '4@E8]URAy}!Vy[|,o}#uzaK,$.5]ve5+8Y mFb6]ZffjB&hxT)L;QbgGFo@^r|MO');
define('AUTH_SALT',        'Gtq!zApsBDZBP;RU]I9|L*|>NMfmcd$mP//)9/$a3@bf$}IYMx-W-G-E3!Ibu9#=');
define('SECURE_AUTH_SALT', 'Sfys+bDn F29^jD,IK&+cvr1d0b|l]AAa)$2ZYPjj^p|]JH|z[x3^spm+lh))ZlH');
define('LOGGED_IN_SALT',   '=+]neQY44Jm^vcfHB*D~I>IZ?zVR]eBni/!z@*i` `C,+D-2 ux1$H8u6S}w})<J');
define('NONCE_SALT',       'soM$Rk@NkTH{t[vM/.u>OuStEMnc8[W%Dp]zPoo+{<r|$Idu~=qI-$F],k|[E#,j');

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
