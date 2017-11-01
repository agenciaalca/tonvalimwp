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
define('DB_NAME', 'wp_tonvalim');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         'gV{cK)5=+euD>[f<SoGm=Q;h;(6^:^P:~?_N?b@+?ScaWlwb3((1r/I-?2[}+Vhs');
define('SECURE_AUTH_KEY',  ']vml%,gA3KtD7R`j_Pcy2G`o;!|u<L2/?fA=z<f4MdHe}|Jm!Hnh(XB|{1[`=,Ls');
define('LOGGED_IN_KEY',    'H|PismA2Pl~e`*m.oo<.+17Sld8_4|(?I51|~8qD}Z}J /XLpI,O|3m}w<]m)?qn');
define('NONCE_KEY',        'qXhT]XMzO!6&~Uk!j^k>r,)r|<~dN{:L*Q#}9f>*usgh.h6SNQgM:Q7]*+Wn?l&.');
define('AUTH_SALT',        'ODMd5PUkE<@<DR[srF#2sBpmKd1B0Pj0nX-C2pB^>[LXW{[ngCqfSS4LV1^Tp*>T');
define('SECURE_AUTH_SALT', '*a;2*WX:A{@3  E6=-_yRCdM5m+{nF*&Di2}nB|<#lA`{>#_= (DgGZCy^P2*+fv');
define('LOGGED_IN_SALT',   '$CwPO5qweqo{RDXvB7e/g6Whu_)qAdoD-<S3D.1,! ~(ILi2n^3sv:;n2voVU(1$');
define('NONCE_SALT',       '1*--p&0/HP~;m+=<MW>iZI/DD&iJnW|$bJ8Gm3-o^:;a3XC-^,L ~9!l,78Ty#lF');

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

define ('WPLANG', 'pt_BR');

define( 'FS_METHOD', 'direct' );