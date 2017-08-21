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
define('DB_NAME', 'bs_unify');

/** MySQL database username */
define('DB_USER', 'bs_unify');

/** MySQL database password */
define('DB_PASSWORD', 'bs_unify');

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
define('AUTH_KEY',         ']uT;*| `L`=Dc)Gj2|ZG3}~lH4Cn}$%}S$U2|YFKb/kOCt@Yl9uEdJZzg : x`V`');
define('SECURE_AUTH_KEY',  'PAqV^XGu]W.2@x*$W;0K.,[r79qt(VhZ2bw!sl_u[PN-sQ4{v]6CIYz?V-Fi0{~#');
define('LOGGED_IN_KEY',    'MRF$0q_y+zo@`}I:v7OY$4O>=eff|VF+476#b3.J:PaCxRZ#gWZgv^Nk4gR&~zQ1');
define('NONCE_KEY',        'u:i-,5dG$Yfr`Fn]cq@iwJOt^$n(RtOF>rl3.Z;?;pq.Olz;s~]@cMNGcF?Ho6uK');
define('AUTH_SALT',        'Pem.}6|/x|?U[MFvPe8 Vfj0jmZb,tbJs#?oZQV!~BT6~b~[9OqQ.FKI&8^$mC_0');
define('SECURE_AUTH_SALT', 'nPB?|iMbApQQS}Q}I{(wvn ljusBJz:v%Slsb2_v;mL]jGD/]Au< OdI6&Z@h.VE');
define('LOGGED_IN_SALT',   '3YULA50zLqipK/-!<6|v04eWq~(xp[yxAh[4(.81jr;f[5O1%a`=vST;ph#GOBiC');
define('NONCE_SALT',       'A2DbXTmb@;G^W3AtC2d73fn(p[hc!wNs3DZSjOD6w-OR[P!IPJc-gDq(0-|6;yA$');

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
