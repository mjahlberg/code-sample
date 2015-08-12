<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'fullbottle');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '|r[RnY[-||>-&N.+U_C3b,:[r^*c8P9x?2-lEv;ZVe7X(i&4Mu*|+a}|qbg Hr06');
define('SECURE_AUTH_KEY',  'jh^*&2^-$sNuq|n?|{KE(goQ&(mt[K@DXBX1e-$t`aQ{y?$|o{PEe)|1% rE>[S7');
define('LOGGED_IN_KEY',    'MQOT^O4,B[,|Y`qFo(Nn=4C&]/i<`3bQ+c=x|z~*gxy-p:F0RYB|Hh1~c2d_S1R3');
define('NONCE_KEY',        'IP4XX<#Q9IndE~d$Lv`o*RnFwq=<MZ(O+-Py+?I6 d(*n*DwUtn/|Damm[3R-S-^');
define('AUTH_SALT',        '<~i|(Ymm@c(D L|+vvc%Q4U%L^g$?uuqm_x4Z(8/9ik+E<|r/igoqyqt<LZQ|dzS');
define('SECURE_AUTH_SALT', 'xVxUP(hJKE_|Id+,LlP<TG^-$yU.53m(lmG+2Kc-w1^=*;jS_*uLW=:lE.>}Y=fz');
define('LOGGED_IN_SALT',   '1c%m2>PWB7oas?=dgxcx&H@p6bU+=;S}hs-`,hmJ;f6s8F{(Jj});cW9I1yMSa,j');
define('NONCE_SALT',       '=[47KDf}Iwxu/++e!e=$iWKv: M9KOsL5Y,@G|EGAK+$cTup/r7}.ux[+COlL^u>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
