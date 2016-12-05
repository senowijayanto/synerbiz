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
define('DB_NAME', 'synerbiz');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'aldira1623');

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
define('AUTH_KEY',         'eUJWJ]D@qj>A~0!E(95}Shj~23ZXp|Vrw*n.)$ DEhjHpsrM,RXCW^h)<d.w=iKG');
define('SECURE_AUTH_KEY',  'Xy8GU`3b-_4*v5=dpm]QK%M~T%ZwD_(tD)7jl&$:[iZ|j-~.?>RG6n;44^W&:BnM');
define('LOGGED_IN_KEY',    'cam}HV!,n]EpQ{41sII&/wKd;)Q]+zi=?67@)+]0>F_YY{VW/D-,PzxY&Pv-LQ7)');
define('NONCE_KEY',        '=Ma;z=GpV#n[}T}Cqcc0K/m$iK)eNri-q[&T)dfKoatUJB!!!EdobU3jszFE)2OG');
define('AUTH_SALT',        'EC]`S+Y74j~$@*0?U`0~1U8#.MJGW^O5?3p%fDQ9d0X5a8GKh(RzPP=[%}`3&Iy8');
define('SECURE_AUTH_SALT', '[Iqy#s5I&=%0)Ai?m^ga[R<1c,[;0NY}sB4^Ll2`&c`*:X3Q&A:.qd>l(>QJ`KwY');
define('LOGGED_IN_SALT',   '85kKh/Y2w;Vqd0-XHRXys6|@0;+{qh4j>,P,ip8uct,%LH&$s0B72iFP({ Xg0ib');
define('NONCE_SALT',       'Az063QU~mPxzhG;i1XL~+ 0zZhmLrYCnj9=CUvzLb+|$FhGpE%?u E1.papYgDL[');

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

