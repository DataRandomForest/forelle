<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'forelle' );

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
define( 'AUTH_KEY',         '#NHE~:7^.9wt=jmIY/7w<4s3g4lb?@{ezLn{!s{6!5(^h3I LxsAn-I,gL3@vaqx' );
define( 'SECURE_AUTH_KEY',  '#UHw_37Dm^IXvZO#}J7wMPbw<+tn}QY;1.g{i.)Oy(d6-L:llYGqZGe.y:|GDv(b' );
define( 'LOGGED_IN_KEY',    'F&bHtvrj/5M`PBsI/G~zq[QVRu?Ht,#d Z)xAB8P)>r^OEi;mxj2|u$7BMQ(en2+' );
define( 'NONCE_KEY',        'rV0N^ms9OR{UwuJx,?xWhqPtQ?;.F^)P@&;H5;Z>Q)X*~/*T-zsw]U+=^iu+D;m}' );
define( 'AUTH_SALT',        '5&3zQEdweBFXC_BKe&PL0_90JAf|SL8uJ8|JG?I[/0^mC8i>;W:3%cKD.2{Y)<G5' );
define( 'SECURE_AUTH_SALT', 'g&BCC{mLf1mMuI.G+3M#.KKXv(0uIi?0n_}%ukGT9r1-,@j(pw$4FrJ|:b&@Y2Ck' );
define( 'LOGGED_IN_SALT',   'sJ&cx?x]+gM>jwgEXpV=eM{~3a g!dz|~p;>n!hf/[85|$D,*i|H3yIqb5Zu{ d@' );
define( 'NONCE_SALT',       'S%Cp`g^yRO<s1>@{nxQq4e=SA4~5`{2~G<yX(FJk5q2qJ*OJ3QG>BNtq#{IO,y&k' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
