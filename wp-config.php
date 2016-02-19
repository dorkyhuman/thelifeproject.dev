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
define('DB_NAME', 'thelifepDBjhmje');

/** MySQL database username */
define('DB_USER', 'thelifepDBjhmje');

/** MySQL database password */
define('DB_PASSWORD', '3VSyvhheQ3');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'V0}Ccv@k@!RVRVd:0K1KO@!-:Zdwdw-KOVSWd:1959Gw-_~_]ZdlhltDHOLOW#]1;');
define('SECURE_AUTH_KEY',  'Fz>z}0gksosCJNJRV|:0:48ow-w-!RVd~_5Zdwhl~CGZKOh#]D:1Kpt#t#;OhpWpt');
define('LOGGED_IN_KEY',    'mun<QIjXUf7IEEQMu,$7fYynjvMFQUgY>3cok7JF4RNv0>@8gczokvJFRVgd0C8');
define('NONCE_KEY',        '37n$r}YjcYnQJU^0},!NJUYRc4}7B4F@v!|0>gso!84d-wk|@GhVOo1[K85S-w!_');
define('AUTH_SALT',        '>g7JJ!0|!}YzokvNYVJk}[48JGo[@-|dokZ-C8KOZV~8:[5s~ws~VhdSt51CGSOw1');
define('SECURE_AUTH_SALT', 'Tb<63<Iu^$r^MnfuBQFU^{,3frj,QcYNc3J7NJr^,4cYngr8YNJZ!04Gsoz@:Vkd');
define('LOGGED_IN_SALT',   'kRd-w!ZlhVwC5GKWS-5[#1p~tp-SdaOp1:9DOLt;_~;WxlitLWSHi]#26HDm#*]<P');
define('NONCE_SALT',       'UcRr4}NC8V@z0|!}gcookwJFRRNZ:[441Cws@~-|dVhlwoGRKOZS[5:1C5s~--#_K');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
