<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

 define('WPLANG', 'pt_BR');
 
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mobyteldb');

/** MySQL database username */
define('DB_USER', 'mobyteldb');

/** MySQL database password */
define('DB_PASSWORD', 'moby@2323');

/** MySQL hostname */
define('DB_HOST', 'mobyteldb.mysql.dbaas.com.br');

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
define('AUTH_KEY',         '>]q/qd 4LU!Flv>Zx:]Rn>#k&6>iZ$s-l?*?X Ihuj2J=H%`?rP{FGAcqmSqTW>f');
define('SECURE_AUTH_KEY',  'OZ}-jyh}k(sY[g*/}PtA|EBm4l2C2-%viX x0t&*2WZ9h~M-omm=o509*}z.)gTB');
define('LOGGED_IN_KEY',    '-N;;v&p}]uK:NDnTemesI8o[`7 [l6pg:i(,czX--Y6z||;3+FB)=$H*V1>ee7){');
define('NONCE_KEY',        'kZ9u}^hg~0>!OZByE&5%iaf5w39%-2ZXtR<-lnWq^Sb@WK?f^JcY:}?wq[V[&Vc2');
define('AUTH_SALT',        'p[6?jeH9 3(^>`7:US_|Au Y,zMUA&W4f9GY+mhSfPnntIin!5P)%!cjD.aC_fXt');
define('SECURE_AUTH_SALT', 'A*0!B%E>dN8QS}GHfUHT$[+d;5j3;+6#BQI  3 Qs6?Oz}s:B/Sb|By6dExy2}Jh');
define('LOGGED_IN_SALT',   'En*leM2!4nOJ^G)Z<NtJ(Hx#j73jLVrF5#>;e2sAV=+dbTC0BK7oz|BjYTm,F2+>');
define('NONCE_SALT',       'T8;M~$]jkv=6^l!@6>UV`+V`gxUmR!o{tojBTIKVckZHJqBj$(8u(vMQOdMobXDU');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mb_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
