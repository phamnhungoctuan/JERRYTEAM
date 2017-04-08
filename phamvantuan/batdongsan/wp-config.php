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
define('DB_NAME', 'db_batdongsan');

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
define('AUTH_KEY',         'EPzZRe;DIP`*^_hGP~&$8GP?{z_n=P9OXbm^BSBUQTG7?B=7z U #_(67GUz/M=4');
define('SECURE_AUTH_KEY',  'j-mg&A4ax(uLli^JDnV]>AA>=0r?bI5jc_b<Vas?:b7:<8`[g|xDF7[ ;*`k$6HE');
define('LOGGED_IN_KEY',    'kv1jN`K6+|CFYuo15q7DMfz#)!Nx[)x_&t+qYz>l=GI-}&U3Z:g/9ZKwbWj]C+0W');
define('NONCE_KEY',        '|L%e&0=^S~#TuUc+p|gWTDeF{%jR6&|veqGI#:qPJ8f_I*h0+:BN!(UO^k!{ig/-');
define('AUTH_SALT',        'pS?r#0T_Cj|>f,:1f$4/Zq[0K8,X=~a=|L=frN?kz~pl6dWR7A6D> 3DLK&v !2V');
define('SECURE_AUTH_SALT', 'eJ??UtAD8BTLo-j#,/V*qOpRB/CF}AseJ-7j..MB=8#:b@6z#5*+jdOWtzk+cs$.');
define('LOGGED_IN_SALT',   'dCtENM;RH5Xtm:ON#hzS)B>-,|IX^zPFm:5=o>RKpu_`Fx&`NA/[yt/jBN33uxX<');
define('NONCE_SALT',       'bA3HZ])TC-J)n{_dH6Bi2($==7@B#eeyNQrVNTnAs2X;|,Lc^,bn]e f*O|YLf#7');

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
