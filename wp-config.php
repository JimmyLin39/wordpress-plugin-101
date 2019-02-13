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
define('DB_NAME', 'new_wordpress');

/** MySQL database username */
define('DB_USER', 'wpuser');

/** MySQL database password */
define('DB_PASSWORD', 'wpuser');

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
define('AUTH_KEY',         ',k@$6}ZJq_K.`V*!U=^z3gMOU6Yk!+@vZeIhe}mdITu:.8=1LcjJo [NdUw!zx O');
define('SECURE_AUTH_KEY',  'sC81;Y=z-Bgds?=ftg502:K1UWTPpVLVO/9GT=qL;Vw2|fFBKNqH9{p@_FO{v0&_');
define('LOGGED_IN_KEY',    '(d>p3W4wMF*[R*-aJIurW,)4fb_9q:7T[B7Kr^PZD5Y%sUrW0Mzp:noZ`[{N%!;V');
define('NONCE_KEY',        'j~gZ=XwkmuIA8l*!?@<Mqm*LBP9a&vUeClS :zOdXYO?2J17%$4rTK%ozCKA0o6r');
define('AUTH_SALT',        'mRwQ<dQ)<g~F;.JLn>#Awxg_Z-_KC*Fzieo [qnpi6/~#6v&$LO2S$7^AMNRt)-h');
define('SECURE_AUTH_SALT', '=Lx0%v+i9#N9G<wll33pc*$^OfF:s4cy~k*Vgy,.7DrNHD11TGUq$L8]opOH/Uzl');
define('LOGGED_IN_SALT',   'W[~/A[_.&yA;jq7GwvV5.(dQZ2V(q:-L^fdkU?@U|xS|,1kWf(}58Ag7f$<5GEl6');
define('NONCE_SALT',       'j8<u~BSY8GnaWV1 Z9Bu{5Q,4jb<OPWA`P1xmRF,}|_bB*>(m/ld.5^mF<_ze7z|');

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
