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
define('DB_NAME', 'dyad');

/** MySQL database username */
define('DB_USER', 'dyad_user');

/** MySQL database password */
define('DB_PASSWORD', 'yAsZr9CBnuffhMX8');

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
define('AUTH_KEY',         '[}6#)1^c{kSv#>/61M%;S!j_;oP!cl$ltN-H`&C_HX^I^&Y{waJc;fv{,yh6]G%f');
define('SECURE_AUTH_KEY',  'I<Tg^e0&:HbTZd] oIU#v12n}>NuG#{2QEf.!_~IfYjK[#-+<m?J2fHePamz0lJM');
define('LOGGED_IN_KEY',    '.]M9A_Fn:Y|go!]K/=b$rdi$`- P6Dyeq9 :-.4BuXM3i:S8[L5/,)Ky MOCq?C5');
define('NONCE_KEY',        '-59Q~ Jfs^L[cc^!:%hImc1NosP(9w - 4N,fP-q/VknF=_GRvK6|u &t>9PYc0A');
define('AUTH_SALT',        'J_zeua>Vk8kU|n4p<=@Yu(b#h{)#2iQEzMX![MEa5AHiRdKNJb89(Quk%B#C|@XU');
define('SECURE_AUTH_SALT', 'pFG@ae$B`%u/~bk%3RAC:Pdo&a$l0Pc7EXFEep/3eZu4DMQTZhbM2ZQr/ #-AOuT');
define('LOGGED_IN_SALT',   'Jxmy!a1usfY#~P4@ZT?z?@~RC`QyqQxSQ8On7O?}@T]+{1>[qHOtW`^[l6G;~.o9');
define('NONCE_SALT',       'zbjp~*7Odx% 8W;M*s84ZU7WGLj^UbZ`br|+o9RpSd08c9sJ@_MdtkNh@Qz(uEnm');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dyad_';

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
