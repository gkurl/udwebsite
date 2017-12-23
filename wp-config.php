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
define('DB_NAME', 'ud_wp');

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'RRo>Uy~_{V)|:&!;!n]|8AxR?%bj>@8SIlD+B25#PzBPEy!{<|INIr]N.=k^y@XO');
define('SECURE_AUTH_KEY',  'Z WB4~i*Xt#d!SUQF[bRX6scb(p:3U~?1fe5v{Fd9pRv+?G_Fh|>,H3d}z-X^eg^');
define('LOGGED_IN_KEY',    'JzEoZ0J+% qxHSdOpmpaa[%OOi*M^g&$?6Dh{a7lMR<bjf-.6Y&6;&D^X/ :4?F?');
define('NONCE_KEY',        'VAYRrNu=y<jn~xCLDy7^#:^{V>.D}fjxl}f&C|(^(V;[eXYv:?^@^gq{ u$T)SSU');
define('AUTH_SALT',        'Ik%dW;F6Jdedz6s/zvc4!C}y+AvO%{Rr2;  C^P :v {HOa%4Y?#FESH@GpP)RI)');
define('SECURE_AUTH_SALT', 'ma[^#BKwh#n&rcqq^+#si|DorS-yG=Q$`DZ(+6tJ>7sOC+U_0g,HDdlznDdO~dD@');
define('LOGGED_IN_SALT',   'vlWNhw(hvEW@{h@{*}/|L!7.][LtLBvW05LB3LbMhJB2?,SF=15r2pa%m#r-JwAu');
define('NONCE_SALT',       'xBYSREYRgTGR,ho>u1s&+q?5}55W0vBb4HHTRA*X=FQo57K=IOdX-mCRb:$nDJ0G');

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
