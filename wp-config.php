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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wodecaoxin');

/** MySQL database password */
define('DB_PASSWORD', '85588558');

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
define('AUTH_KEY',         '4.11h] /K(jcHc:nTvf95qp2HV:N=E%H6,0q<!|,8V%5Q#Aq*i}gK^BTggLX#Ha<');
define('SECURE_AUTH_KEY',  'hV;WU/qC]CPNR}D%OUyu9 b>iFgsQ_[2uT<|p:}5EAiQ@W!uf_hc~2F Y:af(Yhf');
define('LOGGED_IN_KEY',    '><I-G!;sokK~u;abpcc(<IZr.7Yu8/zXsl:=z(TkeSug)2II{T|:6i39Z)=9-)61');
define('NONCE_KEY',        '*6R$7}M*~r;rv(K&EH4pi.Up3)shbjpjzkyw4mb7i)-#Wv_J:Pa9x:e>B3qu<4/x');
define('AUTH_SALT',        '}(9Vj0:WreOLo`xK:~9k(6_^xsM|q^>D].-ln1cPap/y4,m`_T8$1)@*Q.]-~ Kd');
define('SECURE_AUTH_SALT', '?TFn~L.]n9-+TDd#/(;99yV,<F<Qa+cL2bpIPgvd+BKc[hLb@SKf{?AKw!,*KNDe');
define('LOGGED_IN_SALT',   '&{/U=|iY*D]i9{mx^tEhbrp;o8?:f~m{pQ3EG46tzcWRcL^x<Ps=m)iG 9jWGKC*');
define('NONCE_SALT',       'lW>!8L#Q:yz?a.0YTb=Jd1![peTJiaf#fbLmnREX)L_c?Pn&mzY$eI3+,pP;T50c');

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
