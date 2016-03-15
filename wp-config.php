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
define('DB_NAME', 'blog_name');

/** MySQL database username */
define('DB_USER', 'blog_name');

/** MySQL database password */
define('DB_PASSWORD', 'UA1338801');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '|gecpY?Txmmw(!_V;1`QK-`cw-{;a,Srq*`L0+>{9_s^vm]U)soXCg+HnL}A%5.J');
define('SECURE_AUTH_KEY',  'j7iOS2stm+[ko|VE~!IW 7T2GZb=+^-=,fY+@XD]ukavcxp>M]!e14CPZwFL`o+y');
define('LOGGED_IN_KEY',    'C/$1P3iyxUa0oc?$@yU<e(;z-cQiEskiCn~ b0lOo-|psS6dlAv-fe+C:Xtg:bCl');
define('NONCE_KEY',        'r,T4<qZ!$`_7np[A|K)[^}L~M+0T+oQpM7dv=QBx4e=D{jgV?i3Ee;dC%{c$GG|v');
define('AUTH_SALT',        'V<nAs?Ht|#HQvK3Bn$qvPUe6GzFirM+<l&-m,tKRA{+]b,.hmMli0o%Cup.)vDeZ');
define('SECURE_AUTH_SALT', 'd@Kxmz 7b(>`CQ.PUP/k]nuE|!}V-8W@06%:#GOx$Fm}tfP}[eE/eg PKR5;ww*%');
define('LOGGED_IN_SALT',   'Iv$yy+3XVXnD3|~^u*zKKcH9nD8[HbA/:zi/p6qv(+p>kNxnC`?`|QWp</+gC}&H');
define('NONCE_SALT',       '~#2I=MF>;sw4_Hi*-K]VI(18^-YheGm8~u,4V^?;.*&-BJ2;7mz?Q4<9V{e9z5l7');

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

define('WP_ALLOW_REPAIR', true);