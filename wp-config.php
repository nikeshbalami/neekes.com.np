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


/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'V#RUu,a>2@.A7Ro(`1wZ[/z7U/Rt|])7f}7C&5R!OY-MP;kh^_tfQ2,>..i|K.X@');
define('SECURE_AUTH_KEY',  '>%t2W$&9ja13{F}`)Vj(h+]OXX.^]eD4-XW$ATxZiJ^yqdY+eMH~-^:?QW_+U&|%');
define('LOGGED_IN_KEY',    'm*-wySnFI=e]%:<G^b<8?g-THk7w;r!ro]t+w2K{MSx~hfxH*k@2Ju1&1gvitDg9');
define('NONCE_KEY',        '+NZj3|_1x%[QG[_+g.lGdrcjB]^z`UG|@k?y(pU1)U )kTobpbdQWRs|!@Eo,r.E');
define('AUTH_SALT',        'F8>|uJ#/Jle23m @b/|[ZL4fV<&d=+2e!<*-3fD8Wm5|[hAhRPX6ghnV|&gZ+(YL');
define('SECURE_AUTH_SALT', '- ]sS/kO-fdQnU&*6%u#+SpZG03Wkq<9+9/:!+#wRp}e*fMTiA$4rIt7Yw+b_.n,');
define('LOGGED_IN_SALT',   'XF ?o-r|1<.KEi#w>-wUy9DaHdR3cv4KSP$Msb/UvM3l/DA=|?PJE-BF K[tGXT}');
define('NONCE_SALT',       'x8~X|DPN+5|RF1qI28=|uY_7wF p]kZhBw Dm%#m2<jYpNvZEbywA@-DT`:d04s1');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
