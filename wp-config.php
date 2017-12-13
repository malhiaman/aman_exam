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
define('DB_NAME', 'am-starter');

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
define('AUTH_KEY',         'K`.%P_o2S6-XI_MsVB bq%|x?/%nnJD!hX y792k(OX@#cUMlZ~&ux?{(G=i:0H6');
define('SECURE_AUTH_KEY',  'm`zFw^n3,rbo@Uja,8`-:f^HK)|@xO?w:T(:,e%[_ilW+q 428SZc1v9Le^oueQM');
define('LOGGED_IN_KEY',    '*s,w~y:fDE)Vmv-ycFl# o~f>9`$EhQ5+%7`t)dydJ*~;c7(pxRcX2|7c1~b2DiT');
define('NONCE_KEY',        'PMKmr0;lxh`~97s4B|K;EIcq@mV3g{w$etY}%TKxF0XY91+aT5 id;[v]h?Ta4nY');
define('AUTH_SALT',        '7?V+|[Pq,f`-Ol-6,V-5@a,G=OJrd{!.M=`[0(Dg9WqCERP,#V98L1{bjv[6D!Lb');
define('SECURE_AUTH_SALT', 'TYiU$@!Xj]^2T` Iysli5Q8z]=lh]*Er*i-3t.&>-VjOt$Mp$P@ R>}7H.},QB@E');
define('LOGGED_IN_SALT',   'K4W2}U~]o(uh^Zgkz5VE$IKR}!i=5jos(QI28GZ3{HLZ~[~/(VV: EkoH5%5S1r>');
define('NONCE_SALT',       'AUN3V:c>MBuW73T9Bj)bmS$[`g).6NXn(Ck!=f@6?v+rFus?u 1eGP$NYv%K$)u+');

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
define('WP_DEBUG', true);

// Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', true );

// Disable display of errors and warnings 
define( 'WP_DEBUG_DISPLAY', true );
@ini_set( 'display_errors', 0 );

// Use dev versions of core JS and CSS files (only needed if you are modifying these core files)
define( 'SCRIPT_DEBUG', true );
define( 'SAVEQUERIES', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
