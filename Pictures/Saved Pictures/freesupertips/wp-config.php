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
define('DB_NAME', 'ifarooq2_freesupertips');

/** MySQL database username */
define('DB_USER', 'ifarooq2_anwar');

/** MySQL database password */
define('DB_PASSWORD', 'admin123!@#');

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
define('AUTH_KEY',         '&k8b2?z^[SNSEA`U)]*&jGFP~,i<T.KJ^Tfi]xJY^j4X#8xO1Ph!]xJ&}G6:%5h[');
define('SECURE_AUTH_KEY',  'DBn_)6!]|cQ0rPOG{]|z<z}X,ij-V%E*+c8Xy$HZxIs=`,Y_#U`9ath/(_! 3JVm');
define('LOGGED_IN_KEY',    'i)7zV.?)AGcBEx`t|8Nc &|!Az4UJv8Kh=kE]MoHxo[#^k*Ya)=M7dr9u7WXz6l*');
define('NONCE_KEY',        'K!D-mN>M`Ym@= mRhY,RX@4hZ`g!KxW97j%(jN;+tZ.l1&Vo=:{iMRkNj(FO_%wa');
define('AUTH_SALT',        '$UjzPX>%V:V2>tP{8ki7OvDt5:C~06rG%}va-kMPT%x1htwy&OQHzkRr$,%nbTkk');
define('SECURE_AUTH_SALT', 'E_2,tiAU|#1Rr]ncCSl<37`j1,O{w2.RF ]N.pprWtq5T|3,XQ;qvh`YxuvCv^6K');
define('LOGGED_IN_SALT',   'B]AR-s{HrZ&Fp~2U&HdxQz-`} D*wAI-:9]MojLsK})W9W)$.0ZzQRNR.qk5Q;l4');
define('NONCE_SALT',       ',SfN^=@Nn<x]lWNIf8z-*7GR9Ez>Xs/0J?KN,aQ :f*.b1$bDbo?>3qx2nWd44;6');

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

/* git commands
ls
git remote add origin https://github.com/anwer-456/freesupertips.git
git remote -v
git add .
git commit -m "3rd Commit"
git push origin master
*/
