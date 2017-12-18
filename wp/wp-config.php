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
define('DB_NAME', 'noel');

/** MySQL database username */
define('DB_USER', 'noel');

/** MySQL database password */
define('DB_PASSWORD', 'noel');

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
define('AUTH_KEY',         ';L$NN lTGb@uR@h p3:/*|v/q7LP+b<,jj>$;_Rar8g+(uwya?~VS1{J+m-]OJD>');
define('SECURE_AUTH_KEY',  'JgjU$2@m(%Z|I:0%5cX$/q~* /(FL=Vs`gYvi^>{zqdc#@4oS>FI yeNP10WALHd');
define('LOGGED_IN_KEY',    'Upv[x0yyxu$<%MO95^MzWR~3 D?77ID.{G&Sb%b&Yy<zay%[VrMqF U~<E&|y_UO');
define('NONCE_KEY',        '1-@=+4Z`B[$b<q}z4}qY`XD+|0DbiYL>I!}d->ek^d6comjFIP{#V;~(HG>|c(R[');
define('AUTH_SALT',        '*Xr>9xh]%51JjWx&Rm*kxUr,l1+]1yZr(6R8}6eC bjY7GM@Nb?[[DzaD%YlO)C>');
define('SECURE_AUTH_SALT', '  aSPM/G:LJyb|*:KI,S@#;*VPNlp=fRug+vf@)aq|E$?ct)q]W~-}r2pw.{9F-K');
define('LOGGED_IN_SALT',   '>^e3:.Tsgrz_T.#%8qy1x[id#9+OM(bJ1-}m(Cb>n6?~I|5}N=+q<4!Ooid|$dSg');
define('NONCE_SALT',       'p|er4.-=)k |g<U75`G{Ad-i{2}|OX/. -Tg`Vsf_a$1sb*iyg8>lw!im;|2Z5C~');

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
