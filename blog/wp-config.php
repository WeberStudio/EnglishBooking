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
define('DB_NAME', 'englishbooking');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ';_8AN=M`nY}#)Zrpv5b>WEg~<!lYEEUIqU<MbvmF{1<@br6:?W/]qfeQp6Goqmdo');
define('SECURE_AUTH_KEY',  'm]t4w{^;1:}mgtFjS=RzNG5]hO8KHUxO8@/~Q+XH_$mB&|2v_UN $9H{@jl@R%dw');
define('LOGGED_IN_KEY',    'K`Uvx _0]2ze03atbofgSHR@*BCACUQhGupsvD()4#`DH|;,Z)robd9l(Uw)*G<@');
define('NONCE_KEY',        'dx ^B(x/T~YZ=7VEyd|<fDh}-5Sq@SHG)1{oN]D5hHd`;Ru;t3.u>|U[NYf_UGfO');
define('AUTH_SALT',        'DmYul>O4i,lqLawypEi>]iiG0B)eN==fWj(x)jR7R{-Ar Ob/9f1pEBa^b4~isN-');
define('SECURE_AUTH_SALT', '&]U#N}8qKFZZ)uy-*?6j!)PtMAlz+pZin9TXY+r/4VB<$=g{3O#XyYbcuuIGEUa6');
define('LOGGED_IN_SALT',   'DI[l2xFFth*x$:l4+Q_]0XU,^pyjmN_$B0$uPWA:%D+mk.2g[Y9%~E./E!ZTwb+a');
define('NONCE_SALT',       'bB?%|DpRsZ3gm5@Y[sRxnN(_SG|:m}^VyWMMrw0Fk]1:D+y#G7hRaG|uEIYN.gls');

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
