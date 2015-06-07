<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'roostash_wp');

/** MySQL database username */
define('DB_USER', 'roostash-admin');

/** MySQL database password */
define('DB_PASSWORD', 'r00stash');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '0V~<<Z&x:Nr9oEZ;-47m,`{m_WvA^f|czWj;;161 n/RTA+@E0Vt-!|yS]DJXQbT');
define('SECURE_AUTH_KEY',  'o*CP<tX^^;[u+X@tl,)I~AH1ST.3|RAT(0he-qK2?@tm|[-8u?/,$,7ldW%d];:b');
define('LOGGED_IN_KEY',    '?n|HX+3}Le_$L+(Tr=y9$q)UsvXm4q*V+mH+klu:g0LJg|Lo.IWqV@l36H }Zgx+');
define('NONCE_KEY',        'z~HHt*w]TvVQ+mLTgc:|2>Y{yPyl Zw(/X~+5(r$lfi#IAV?Sgi9/;B{ZGw(]BKM');
define('AUTH_SALT',        '?H;.&0>(sjg1iR9V]ofsbp%_b#;6f_NH_O)W|5#)$Pw`{){w|-^5*4<m{Vu~+.u9');
define('SECURE_AUTH_SALT', '48lhg5{GG]MkONuA+GGuj+tqUqirqb_V.Np$9IS^Q@!W953qi,%}:%xEA,3uzK]j');
define('LOGGED_IN_SALT',   'Bx9|^ZO|@`I&&Y&5|g6)@N ~/Zw@Yx>Jl<cN2^|f+/D>4Tpsma]MMl~=P$+=NZv7');
define('NONCE_SALT',       '/R-t`ywFX~ZUjy_h+_fX!I(T-?azk16gZ>x(?>*n7y?+O81G>Awbo-{&|/^14F2q');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
