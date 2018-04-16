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
define('DB_NAME', 'bde-website');

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
define('AUTH_KEY',         'v.+~Q^qhTVt!U[g~n.IoujZ>R:~*/n]%5%1[^:ChW#imTcUCi8u8`.6LYf-N$/9?');
define('SECURE_AUTH_KEY',  'F; K-3Gmz}r0gsH1i&kUOyAw>#[bPna9DK>weW%]/1`>8-LmK&(>._}W<{}{PR>V');
define('LOGGED_IN_KEY',    'oipo[cEQNQzi16?bRJQQHy[77v*y+56+W#9~8YiKUGcTi{ <gSNY@ax4QTe&zr8;');
define('NONCE_KEY',        '#6$ipCJhfXB{b|Buk6${fk.J@|Fq~26`4ztu.g!?xQXVA2hDArMg?wG~O6w2L=Rz');
define('AUTH_SALT',        'Asqb8s|o3G[3$ps4I%c-b}_g^FS3200HHVWNF~cK:X,3&^xyz])8Q/c)aDXmaYZI');
define('SECURE_AUTH_SALT', '$M_86Exc%Y,LJnK}-?..[!wGdc]to~YuZ<*iqLsj/aA=?cfG)$9ID`|n$j_Y]~0;');
define('LOGGED_IN_SALT',   '9Zesy4RndE:yG8ZuKKtKwHwZr=(_hSODx>B*IEB3{UB@icrQUp>O(4E+7&=*,R]q');
define('NONCE_SALT',       'JVHmv3FQs-/w112&LOdxUW-#w4/rA=4q6:Dy9E0z`#nm8/(,>yzVM2mzb+_O~q#%');

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
