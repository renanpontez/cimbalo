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
define('DB_NAME', 'cimbalo_db');

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
define('AUTH_KEY',         '?}lc$5-sMYz@2|=iN5oo>C9c~s)vG`g^U.wj(wW7:m}3oG8J8uI26[0j_(/IBlHs');
define('SECURE_AUTH_KEY',  'ned;_lXPm eypo3]7C[}Nyygi(:D4oMOICGGV@khOiRs=y@`bT@5~:(8Yv=l8c+2');
define('LOGGED_IN_KEY',    'L.ciZH6ZJ+I!*1!=TF-.5e_xb}JM; eV$y{VsXq&cET[px-z{I^J%vwwcjE%klSy');
define('NONCE_KEY',        'u^71=qB2 %)D~^Z5H?56rRnE_0.2Nv.F8dITJYiEB~467NrMtvw&l{XN|=a+`U74');
define('AUTH_SALT',        'kAy#iDU<==vjqyHQIv2Asp_9[^c=Go-driVI.VS-_) r)^n=I>tE!QM>@%[m8y%J');
define('SECURE_AUTH_SALT', '>=9^NNW>FVZnqS43C6`t)l#nnl:&_Al}vQ[D33DvORB),XaaG!GJV_*l;>BgQ>k=');
define('LOGGED_IN_SALT',   'e,EXje)/I/^I,20P/4p$U8*8]eCkI#^y|[>4q%4O,z,ur!y@-MRGi(Dd}^ch~m9W');
define('NONCE_SALT',       'j_gzJMOK3ZA6]YR!AuSvgD@C&0[v)}CU*SQ19+jW<w2/LpBDP_oYW=;-/`j5|}b#');

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
