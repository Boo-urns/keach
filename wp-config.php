<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'freelance-keach');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'root');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', '');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'n+_D*vcE&4sG3`-|JI|LlRl|<>5-uU~ M5h._tD)txaiELS+(bo8csmaag1wT>NK');
define('SECURE_AUTH_KEY',  '?>+7FD(w{YGP6m9w$lLkS&h#VgbF`(oD@|4|=(+yIm?}3o8o3>EuyK6QJ[LvT(cv');
define('LOGGED_IN_KEY',    'I!CbRF%m [+`M%O+sNGRqZ/Zx;+XQ>EyNzEB1kU@-WMSd<x{$Kon3DK?*Cb_$M t');
define('NONCE_KEY',        '&8-6[aq}VfX2~Gx{bUapn^Lm]e,;@ag47kwV=(md]-E V+|t+Jx`|=_S8~S_)SD ');
define('AUTH_SALT',        'L_0NRY(;;LK+54fI,=:ml+q`Qw/3m]>3a%Bj:^:DW,I^_)55{ky4lhd`Wu&q;6r#');
define('SECURE_AUTH_SALT', 'v<A|+bvh$Pt?tH4/P=;+lp@8Ah7;,YIvh4:$8jX9ZEO+Nzvt+^(f(knjS+=T/+3y');
define('LOGGED_IN_SALT',   'e+-N5WGD%~aLTY}FygeYH#@n@[T|4K+t{AMd8N4~{+V)3m/&#H5w_/gCE{U*1+}B');
define('NONCE_SALT',       'u|szdvm:/P?N<M{bfB2p2-|ud(]K}y{l(~z_<Sg|TY &fBD];|EIBkS9D//Lnegx');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
