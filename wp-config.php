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
define('DB_NAME', 'michelle_maltbia');

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
define('AUTH_KEY',         'wEA%ah}8(OhK!muV4kuQvDRW>_sEU>!?0C32$|VCtBbk3b9Ma}@_jrLg__`d84w-');
define('SECURE_AUTH_KEY',  ']} yJ4w}6D0F;MWqkU|KXE%vYBn6(We.F{wiQf@~x>rD9cDa+dS<O&dzilFXw++U');
define('LOGGED_IN_KEY',    'd+Tr4!NVdq5^#[*RrRAcQpJdV,NB*2W3rv7Fy.cNPZuR7`jq|>>Jct9%57Zx#oxx');
define('NONCE_KEY',        '8)L8-:u,&@7XWi{DFMhI~SPa.Sx%(y-^PFIWm^+1fOQtw<bt|P@6!9T4B)D<b:p`');
define('AUTH_SALT',        'OH]D)SYd mA+iPd/r%oI5&*Tf./npI^+t-aIO|t_+eO@9t)(lvc}h+Un^%A>lYI%');
define('SECURE_AUTH_SALT', 'm|F+nBRcbSLLX5 LnC[> 5W4m5N/8I7<r(*:s(#L8CYCuNL<NA~qP|ji4eBI{8!K');
define('LOGGED_IN_SALT',   '&8Cg8FAVhB*MHdWD|fQEK[1]1]nANi<F:ad6r)G68j8c9KTJZnu#JDy}UCN7|Oi6');
define('NONCE_SALT',       'RTGz@+xO_0EJ-Pb0k|):hoVwAf|{Y:Bcpwfp,r9pykh0dZhMe01nCnQtqJPI[{c*');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mm_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
