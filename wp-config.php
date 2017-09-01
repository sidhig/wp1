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
define('DB_NAME', 'big');

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
define('AUTH_KEY',         'QwtY`Z`dA[xyVM1;{|mu:RlL$;2bWp)o7O.9&fs)WJ}usg8sScK;}(f1&T@k$ <D');
define('SECURE_AUTH_KEY',  'CA5^9_,N>x6(n^y#J,wT2_F[5_[25MfIWm~cO0=SqV&rzf`bkc4W}rwI/H88V2*>');
define('LOGGED_IN_KEY',    '{S4Tb9mZ^d~]B|Lz=!I |@u@yW`[qbQsyA|2C9E:jkIG7$q)oKN(a30-F/y}+f|O');
define('NONCE_KEY',        '430ti3tw?ZDrKpdfq^4%[8:cfqe7o+F2!i-3Wn>d@Z#Ww@9zK6]SJ*;c/(zM?6:6');
define('AUTH_SALT',        'bMS9Hj-v$ce2jTKV1w$}RvY$yCvv&vjL;~i$z^qhHnlo&JH..pP/}HpuaJpTTW=I');
define('SECURE_AUTH_SALT', '2e[/ `=m&X.=GI-B{k][x.yz&&kndR%2&H@XGTs[w/p&&_E+b?gzuQ6+:Ih)E4U(');
define('LOGGED_IN_SALT',   'Bi/cNYlgs sE+4nh4^Ac-GF8Q%;h9r#Gl|VLmsrl=;#rL_YZ>Co@1(|,4y%-RvsQ');
define('NONCE_SALT',       '6V=asPh:64bUmrB;9xYV9D#(nzsU1KhYmhlozNqQp.b$3O$U8al`1_BFUdPX>.K]');

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
