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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'greenticket_blog');

/** MySQL database username */
define('DB_USER', 'greenticket');

/** MySQL database password */
define('DB_PASSWORD', 'MticketL42');

/** MySQL hostname */
define('DB_HOST', 'gt-2014-10-04-0010.cl3q5egtkz5r.eu-west-1.rds.amazonaws.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** FTP Settings */
define("FTP_HOST", "54.77.36.6");
define("FTP_USER", "ftpuser");
define("FTP_PASS", "FticketP42");
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '}l+R&kuNe]d{NJxvOCQc}.EyH@%z1V0r}}h<f~%D<09V6MkO:>ltQBilwHPd<n|?');
define('SECURE_AUTH_KEY',  'UC%Tf];O4/O[l<E?jpUX5+[.6vTGQ-k(lr2cUrQB{CdZ#/AS*uM[3aRWh{Q|q=t2');
define('LOGGED_IN_KEY',    'Uh^/=S@,mm(5m~GBCu+~2=oS+ddq6o(e4:_H@RnXCc- +P3`*MWO|Jvd.Rw`=E%~');
define('NONCE_KEY',        '2Hnt|7]+_ X.DCd*G)n-J~|~KvW#!UY$+4<-M?oa|L5JN~RRI/g<?j&HNhoaI-]e');
define('AUTH_SALT',        '+6sHW+s,hJhBU#pW?z~(KlU/]p%|#^!-cL,;=CG7,),s4fZl6)<Y[uN;gF9[/{AW');
define('SECURE_AUTH_SALT', 'Cv!;~|V-3$FB-J^@yR*8-LEQ@&(13Y(t[QA14QS 9qD=*NmB|j)3px+8I@5SrjSF');
define('LOGGED_IN_SALT',   'y-D-!bTfg<fIuZH2-HkPc/QN8MZ%k,9n/q2Ahb=7a,z|JpO.k~kS+( x$Mod}-NC');
define('NONCE_SALT',       'h[WK{XDe(Wq%]0h^up< ]?bF$W|z5lRy7Zt&ZtzxO$!nfNbc>p5CUMPoCs9Uq 2c');

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
