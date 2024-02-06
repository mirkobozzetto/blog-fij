<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'local');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', 'root');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',          'U*}E(#4E+.oj[JlCj}6IDh$o)eQD33!EP/yTj#1P}BX9wbCmT_c-0C)?Udvi{},{');
define('SECURE_AUTH_KEY',   'SW~-}`e|mV.+}8xVY5v[|9+N~6P~B$+LlUZ#AJ^E1%.M?A=,_@$O2j1!kdag%iD(');
define('LOGGED_IN_KEY',     '6gsl^4*HyR~( A7;ShKi#Ek)1W#^~!F~^=KQ71-9^y#6eN,z?Gy7McH=tA^2_AZR');
define('NONCE_KEY',         'F3Nh?8EqA[*DR3*HyO_X]~Ii0D);kA6d4;yA0Rk|kGFFqv>dQibbB3_c_7-rfe.a');
define('AUTH_SALT',         '{Ymq^PZEDfFKWmQ)thtDKP K6E2Elcy9;2h#kPv.6,Yrg@]Ilu>:sxunHAeo2!6T');
define('SECURE_AUTH_SALT',  'PyR%,exatg39V8[Mr$nV@W-a}s*FA#gjD$N.n.J:JNQ7:Gg QsD{ehY}86U1ja;c');
define('LOGGED_IN_SALT',    'Z )axhpY1*kBC6/n^X&v!}TE9$Q^H84EP[S*A+<,o%NqHn0i*R)jF1}^&hkVW-%2');
define('NONCE_SALT',        'jCr4qKT__KNf; %7JCHyq!y.DhMye!<LzFDO``RZxBW8*j1.Wbr!Hvz%[.VGFPXu');
define('WP_CACHE_KEY_SALT', 'N|O{1@oZxpth{d#cbsc:J@`lgcBH.IrV1bKHFo]Dk7 `Gk$r+DA1#msPd&f{}v()');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

define('WP_ENVIRONMENT_TYPE', 'local');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
