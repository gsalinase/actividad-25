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
define('DB_NAME', 'actividad_25');

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
define('AUTH_KEY',         'RAg.$s)vSBa/`w`3TdMTb#mVtbv|Odgs%NZs>Zf0hi:P7Xjw8wPY?+g),V >0/Sm');
define('SECURE_AUTH_KEY',  'so@0JfX?&T~;lN^~v^y~]nlkz)WdE%0z3m7!|3b-2c:1#`%:FC9/{a)D2^xLH2g+');
define('LOGGED_IN_KEY',    'G#ht#M/5ei#Z^jE<#o_qgzTQM:60Gp<H`3z$9k_@`Aw+<D%6cBmEcHi@1Pj~K]9x');
define('NONCE_KEY',        ';uI_:E(,4k@Mv]=UxPbmDD<r03^p}(t(hhate,J*7-Ck@tR[m#zppGoa_`>KB/Z$');
define('AUTH_SALT',        '%zcNy4os,HR:6%xV_]cZ7;K1Hvp<PZw+U[M$iU+$qM+x!H[xv$izZB$Bh2fnucr>');
define('SECURE_AUTH_SALT', 'LX1Pb0+w_;A#-y%4<;si]Qm:=A %GK&~L&<QMwR]TP0=f)#J(Clq6o:r!:0^>{zs');
define('LOGGED_IN_SALT',   '{0N|% t~Z$A(md:)>M(#2_1XpA8u]hjH&Tcv,p(<5=**?m:F9?^Wn92X~d oYS~H');
define('NONCE_SALT',       'vv~y7`9|`6@pT!G6kkwSqqvX( pcRJA!`~kQu0:H@G!^(W3do(_{m2]S;$yHm/1I');

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
