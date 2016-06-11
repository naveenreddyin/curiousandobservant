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
define('DB_NAME', 'nitishga_wrdp2');

/** MySQL database username */
define('DB_USER', 'nitishga_wrdp2');

/** MySQL database password */
define('DB_PASSWORD', 'ZSKpHNMoZDPEWxB');

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
define('AUTH_KEY',         'fGmRHR(r>}rpOmD^D3a!?6<@a/nXi@%k*>}tQ96a,/p0R=1|gsO>f.9K;|ly?qni');
define('SECURE_AUTH_KEY',  ']P +jO~oj,8^im{Vb=D-Fpq<S$2Z?`Z$Zm-e@X;-ot>7 1y^$$LDt@1GSQN|nRnf');
define('LOGGED_IN_KEY',    's1u!OxPv{UzL)/*lp*_HKe&wbZxg+lwI}O*NK}cCn71nd+HsRok8QXf6|+#TbK-|');
define('NONCE_KEY',        '%;+~A}COvVhc*/f[q6vGF!%pS2_EQNA)+?? A;>3VQ63b3??r5i<-UmXX|]S&D^Q');
define('AUTH_SALT',        '4;()W0k]K:Y,D}+?/[&6$RQtU,>>}V/{p{]1iac-HSBH#[-P(6%8(FF]f-|W+.,c');
define('SECURE_AUTH_SALT', '40Xz<2=FFIb7*iY2H-.M;Wz70YVP0H}W:l2_fQ4y*h-:{;G+i%aGL(UvaIx75=uf');
define('LOGGED_IN_SALT',   'n4OYClVzx:|M4CHUG&8VY,bE1.^hN/[87qojQdDHI(,2zMz%<jy|J<j.c7S2cXxu');
define('NONCE_SALT',       '4.ai!|4PiU{z`;4`kxH+%4N6KjoJ;{LTp=@KFWWr7rpdw*q-/_19G1PVyi^Q/brC');

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
