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
define('DB_NAME', 'wp_buy4you');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD','direct');

define('WPLANG', 'pt_BR');


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'W=X$sOme`p#sc$g^iMw1@$c%GY|Z{JW~vc-6|?EVK}j!jwu%)34c+=tP^B`wz-dy');
define('SECURE_AUTH_KEY',  'H]`6Vces*[6y13aJ`{89y%njsi%6p9=Z)co]h.YziFXMQe`?s`r=?;Y1i.,cF}o5');
define('LOGGED_IN_KEY',    '.3e3d]bB5VjrP2wMJ5NbB]9o62J7t3]rH*8)4TjGz7VVs/9f~??_vfAXmdP)+MCl');
define('NONCE_KEY',        'Rcw@?jJxOuf0nR4c:rGD%n!~jfgCD[x0aR@Dsf^t:~0Ym}FvZs9(J%06Jw=f[zmg');
define('AUTH_SALT',        'E2D5MfPFG3s&Q4}C} pD-Z>r6fE?zo5.{kD`rAn9D..w-WH[WN%mt0wo0YKBuVoH');
define('SECURE_AUTH_SALT', 'nz.HnDq}ZDJ$lGd#s.64K{cbj7w?PM2UdsZHhH%aE6P#}[S#_{9<l}HY%QM+tKXs');
define('LOGGED_IN_SALT',   '+P OOdL7__9LIhjDaQ i!v:95-[UG7J<>6j/(R9V~1tU_.vTj8jSP]g1seJh7 4P');
define('NONCE_SALT',       '7h`Y[_@i,F:^PA)`4wY6,udu)l:?L|K>mJ8AUy ~^INn;zwM`CqC~#f7**_n{301');

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
