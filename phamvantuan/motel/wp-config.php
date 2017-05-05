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
define('DB_NAME', 'db_motel');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'I!D*W .EncPl&`:2]Z%;|MJ;@!L@}C.vQG<tI;!<?b!{E,6MOH!&txtsYf51[^Du');
define('SECURE_AUTH_KEY',  'lC:s%yI8YZ}7Oa=aiI{rx}g];(k5afV*^aAN(pFmn,/y `C*gdF4L7[LW^2H-#q?');
define('LOGGED_IN_KEY',    'ad}IR5W#Qvi1_VLIyn1?5sJo7t9rl!Ch@ot]ZvnJ[(-$,ym[zHE))z8zV(.>1$O)');
define('NONCE_KEY',        'pTF(r@^?A9WNw|#]!&gES<&WBt #6[K$zg!s~=okQKGs.RStvvPF;;5U&~*ox(W5');
define('AUTH_SALT',        'j@,N,b1zRv84NAfw*]vC=:iP>8;0IB|`]_j7(.(i B[D#>RndQWysE1tWF[%(]W ');
define('SECURE_AUTH_SALT', 'Zje$DM?OS,DzkX8?SWgZ=Zln&(kuBG@Tq`emqi3@u5x5w}x>|Z{}GTcyo&Z!>TJX');
define('LOGGED_IN_SALT',   ';#S0j!N-%AU5@@>zLtIZ0@ANe}(z(m*U$0l<aQ&mA;|n %B(>YH&-buT [y[P.{>');
define('NONCE_SALT',       '{.0zn-R:aDw;-TE/AlI=ce)fB--W5r|[`y7QUCb[u=7LvPkt@L:6{r$%,yoPd|Dh');

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
