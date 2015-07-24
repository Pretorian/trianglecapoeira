<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'trenzalore');

/** MySQL database username */
define('DB_USER', 'andresmacias');

/** MySQL database password */
define('DB_PASSWORD', 'Magrathea99');

/** MySQL hostname */
define('DB_HOST', 'mysql.monobytes.com');

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
define('AUTH_KEY',         '|#J?son7+G`sOutwPbTPKkP&~KNhu)jjIxN:].j>|w6>=6i.7E }%7Sb_tk(sB_[');
define('SECURE_AUTH_KEY',  'yM:n-Q]uXGgwz%`lw0:wnKKLtw+A^7};GJrxK._/YCBTe@UR{uJ$>Dtk)+)mPmBb');
define('LOGGED_IN_KEY',    'Q6Nf^p5sT*[ elGc4,E3dqE|TdRKEV>k2REJ}W~bf#QN#^`Ar/HL#f-n+8nTR*&l');
define('NONCE_KEY',        '@k}=N>Z)uV:ciW[YY;m<Ro.5G*16O)o(Oy4&.g`WJIf]Q+GE#hZI@uW|~&fe+A$~');
define('AUTH_SALT',        'U[z5;!F}1QC$g8PT7o8U*xgj{j7,tD|>s:=&a)8DhHgT3xr$qts?}3*(cIpZ&y`>');
define('SECURE_AUTH_SALT', '}/CtaA^KK$B!`pA^?**N8Ni95sDf,F6dYwBOZ{]-41_Hlq}9D~Nk^~z`Rj+SbT;t');
define('LOGGED_IN_SALT',   '$H|n0&/07j6I/!RALYu2M]>J3Y-D4wa38<,2Ao+|Q4b+}d?o&D#@LMyiW11*AZT]');
define('NONCE_SALT',       'w6pz:v=;CaB7mRSi9Z~mV*<ZwAA+GKZcFOn41&Sy%S,7NU)G0J7=QHqW/zahFYaw');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
