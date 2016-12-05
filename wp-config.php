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
define('DB_NAME', 'procongroup');

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
define('AUTH_KEY',         '8DnVr(t9rV*3|%r38N8&Q=+L5#n6B(mh^Byz|Qe[{bQ;kyL)0lK:A;5%hZX$Zeh;');
define('SECURE_AUTH_KEY',  '!iaUe!d9*qyu#[=S?/|DY=l=nEx$h.?!HYiR)ORNIe5%XUu1x.<X0Y/BKZM9^r#K');
define('LOGGED_IN_KEY',    '~S-~&`v7Hq:sG- pnhE]9IXmUjY`I75$_R9;vyv0]vzSd!AA7;FH#OMizcIDW:6X');
define('NONCE_KEY',        '%S@ukaI5Lo1RW;5I[f2Xi4|ov}>HV|H[Gu9JE+Yf/TfKk%B#^?&E)YwD^_4beVVp');
define('AUTH_SALT',        '^^sm[}n8O=C8:s6)5=BKSUJ[sn3CAJMh_c5/aSqM&/29&/xOT$wt5~TXX;[X!*J]');
define('SECURE_AUTH_SALT', '$9P{zeII&2qIyk&zLF:T}$/YB?``<Pm42`y<GVdck^Ekr5*<6_gr[X4;P]Pff}(R');
define('LOGGED_IN_SALT',   '?/*|9[Mup556$a5la[cOUL:I6qZ^)$Un1in5,u17lon ,DSa$7)}7N`Z}H8>qX0J');
define('NONCE_SALT',       'I0RJTI7,B.^|~PQGaO[1Vk]ZR9?g`ds_ ooDgQyV2]zm{7&w-ql5@5>&31rx7%K>');

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
