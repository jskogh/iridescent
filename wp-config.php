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
define('DB_NAME', 'iridescent');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'p`jEL8;M4B?TQ#c:qb6.6;L|5-<>s&S{@ATWiz+s^N+P%am*U!Ju2LZzo[s(FCDo');
define('SECURE_AUTH_KEY',  'zsCDx !7U#WB]x;9ED+g$U{7-V]I)*!IA(w|gkJ2dX>YD6|wed)>M#966TV|4h>R');
define('LOGGED_IN_KEY',    'otmXiB=GSt(:cK-iGqVRpn0rr!w,PGloFvZJJ(EDPK:BS>_([[ZCS>8$FsoA1`7E');
define('NONCE_KEY',        '&Q!lhS:NTq[Q:]Uw]{$WD28LI,GHl54alV:-&nb||H9 Qlg3|-K3,Hoo!298Q%3b');
define('AUTH_SALT',        '.V#6;CyrG2bi:Fi+J:$wKR/b,&^Yz~KC<GuBplzs1-hM:y]D+{z+#=!T7j_*sFXu');
define('SECURE_AUTH_SALT', 'u[ 2|~ZM^wGAs%u YxCHh<,;;I|o{~?vf6E)seb^ch|iD]APOPIDph}L7wUJJQUH');
define('LOGGED_IN_SALT',   'KBU;)A|1Zi<eH2U.e*tG~dWU3pDc4`D}E4kU{)uR2w8fXGp{;v& >?#X+z1xxEUb');
define('NONCE_SALT',       'GL8Asplm)fjs sTIP*reu~wO=[DBctQ5;dsAAbK>P3fKRItz#FqqY:vpBBfqmu~;');

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
