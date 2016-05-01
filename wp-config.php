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
define('DB_NAME', 'devm429_db');

/** MySQL database username */
define('DB_USER', 'devm429_user');

/** MySQL database password */
define('DB_PASSWORD', 'B81Q7Bs73y');

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
define('AUTH_KEY',         'hGV$:5AWR+9$X9V|k8sY|OJ45H4|oK*c<v]I{r++.6e]~[!kWdI;,aMH_$j_GnAk');
define('SECURE_AUTH_KEY',  '5?jt.+h!X,m+%pLdTXxrjlq6JT T:S^qa@~^KDMH3zoxg=*!3B[&#Xp,0PDq|Z)W');
define('LOGGED_IN_KEY',    'wE(MPT0^]KI]YK& kVi5cCUaXEidbz)GNndqX Me&,gz5.$h?yu(lC1)2HeI]n Z');
define('NONCE_KEY',        'uo95^MF B>AH|yZtux=-}Y{:b;*g9IS|f0p0![AQ&B#&3U-a|f;FBQBLrnE3E]_/');
define('AUTH_SALT',        'edn=A<Y(=<o b_`IUgk7~-=BysW5^ @4+Z(G?.yWoYf!-cm(|X*;>N-omDD80I>k');
define('SECURE_AUTH_SALT', '`*dF5oisg:B^-hOWXy#}IHfX+6}pQ5]`aS_x,an-3QS|I;XWcw=Z7-)|p5H5fK?f');
define('LOGGED_IN_SALT',   'mS^[Ql=I~mse5]WYQ +?:+0OC#@}:G$=y`BYnLrw%smx?-;C/l(6O[+maq{gzU0^');
define('NONCE_SALT',       'M6uek:?%mSaM2m75HBAkk.|$!~B{pvZ=OXHS3sx&s|D7GpUW}(hPt*`|*+oqOX4=');

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
