<?php
/** Enable W3 Total Cache Edge Mode */
define('W3TC_EDGE_MODE', true); // Added by W3 Total Cache

/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'fullbott_prod2');

/** MySQL database username */
define('DB_USER', 'fullbott_mobilef');

/** MySQL database password */
define('DB_PASSWORD', 'En1323432');

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
define('AUTH_KEY',         '7M{WY{8U51i;Gn)HR7i0}*PybJ,|9PA`d&zE6}+U4NP-a3z!6j%Y_S~ML[-I5&yL');
define('SECURE_AUTH_KEY',  'eV]ZuPKfe| s*&(%FicQq+d-V5[xEDJ-o}<=#6$Q{|-eKi}w]Q:#|twC#`/zGJc/');
define('LOGGED_IN_KEY',    '~(5`RaN3!NJk+!`BN,y<aJY-p`iG^X4[g^q-TF{OMO1^+Ixqr@0~jI%P1GW?(w{!');
define('NONCE_KEY',        '/A/&[)YmWu0Kd/+ 0z_:!e}>J|c).J%rh]P* 7YqaY_:RAOn=>WTQy3,5G>P7FR(');
define('AUTH_SALT',        'm&k2|!K$A4Z+84S ^xB:iCJL+D F_ytXecb(W|zkcK2I|uzC<{1UJ_hFS_cjNWB ');
define('SECURE_AUTH_SALT', 'xLt!}%>FP:S-!&JI-dyLPR_J~u+N;no.&cQ4pa5ZA[|1U&AGJ+9k9A?!?h6xgIj>');
define('LOGGED_IN_SALT',   'DkU]&)RN|tB*60}6!y:<BKE&OMsdz9j?^-gQ= 8<:Kma^?xV  -E+GHP`Cc8j[VR');
define('NONCE_SALT',       'oS&/432=}Az5G%#Uj -b6;eMwKrl-q~a549PhsNJYn8g#-r%{4xyNIK:%[b6UJ05');

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
