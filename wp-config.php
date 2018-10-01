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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'freedomdatabase');

/** MySQL database username */
define('DB_USER', 'freedomrules');

/** MySQL database password */
define('DB_PASSWORD', 'Freedomrules25789');

/** MySQL hostname */
define('DB_HOST', 'mysqlcluster14.registeredsite.com');

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
define('AUTH_KEY',         'QnsAJ*xOeQ?$5{1X.OQjg l*Ep+MvTq:)#v%J=]g[SI@}EG,wV^69tmrpb`9Ghdw');
define('SECURE_AUTH_KEY',  'ofPjZF[i3{E$EOser_9^RYB5I6UTIe[;.Jk+N/.!#?w<kQgPO.i{7s]Jx}5q2yN;');
define('LOGGED_IN_KEY',    '@.&Pq5IfbRx|37mK%v0hH-~}K5kfBr3K:.?Y~_N~I00!@yaC>:^sBp0.oc(vt1 =');
define('NONCE_KEY',        'cw9,&UA_}T8^IrxIDzY>G8$8YgB;1&E}]o[lzc_-*JiG*{/@.=r4Grd?+UhTZvs]');
define('AUTH_SALT',        'NBTnD2sQqP B_B 8D}i]FLiqFoa[5[Ar.f&5[mtd(v9~<z&N`QuI6rZ&.r$FAHXC');
define('SECURE_AUTH_SALT', ')NK}cb.0O-J;[g6Pjq+#A/SjR(k4{e[:ZEu[[b@AP]`[Ag`_u&Iuk,zQZnt,2z+4');
define('LOGGED_IN_SALT',   'nHM`H>z7r|-KT>W354#t--K?K[b+3v7W 00?c*iqOC2po-~*5*{V^64Jkzk(:4l?');
define('NONCE_SALT',       '-Kr|Mq~>fGl|f{gKZ9rRXs Cj Mv*dD@f-.y|P,$rJmw}iM`w6#r!|xcr:O1]QHT');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
