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
define('DB_NAME', 'isa');

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
define('AUTH_KEY',         'MeC?EU1$=V9nAL)q8:*:wduPBfcSB-=2E_coW<_faHX4b$Ah=8.VH>Ov&j2hJVZ,');
define('SECURE_AUTH_KEY',  '^-ai*]F#2|u6^7bV%.*<D.Z)<>$Ja0OD#T;5(%e&uyj(TK:N}AeOfICkS05*A0%R');
define('LOGGED_IN_KEY',    'Y$z@Vu;opA{eawy_LiMzgYXTvGlQ=*z ga(X`tZ#-|[1V:nRnZ,1TC2 8Fcr~Y2Q');
define('NONCE_KEY',        'qDI/?-m3pKOHHP9bgg~+h$8sG_7gB.!G/{7|cs_P~Nz511g+jeu_k_SHqJYZS3rD');
define('AUTH_SALT',        'AfKM]=JfA) 0!W^@fA%S|PP;L-6Sg@9vp$S+HI`Ep@$~x}Dmir@x~4Be-hr~`WH;');
define('SECURE_AUTH_SALT', 'L^mcZoO,!u;u_!I-&[Dh.0t((1LY_p93dyi&WgW|%uMBeIjlqi*xcnL(J(_ySI8&');
define('LOGGED_IN_SALT',   'CSnkJTq-zp>xzivlZW%g0;xzpifV&TV/6hU~yig3h>PfZ1<A`;R!)Ib_eCK}AxNW');
define('NONCE_SALT',       'OU2w2!; duXUuAntf&pat1S2hppP?j1BM/4qDm6d6O_xu&Od%XwAV}wH5c3!~wt*');

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
