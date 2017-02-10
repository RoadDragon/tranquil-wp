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
define('DB_NAME', 'tranquil-spa');

/** MySQL database username */
define('DB_USER', 'spa-admin');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         'd7{xi:t=.ln)X3H8pEUi{{~{X|,j*M?IV[gG8?9*D8DEck?zJb*WVLt4f~#t(T|g');
define('SECURE_AUTH_KEY',  'Cbh!ihQD|R^=}*;^cq2(s-[aTZ-^JZs:+cTZq*UP?U5#>HV/b=SUp|u1&Kks <Y6');
define('LOGGED_IN_KEY',    '(MDbm]lCU|IPW][1f-#^--Y,.j@P:SiF*,v1aq9<oWp,o|qd_?p|-Q:^kzo(R>Fu');
define('NONCE_KEY',        'u-8w|(+ESgp3dt?CHodXVkF|1KofvL(%#{UIimxLJy,bfIc,$7)LD|d<,jfTT a_');
define('AUTH_SALT',        'Ar3sywmEix#m}-:A/yH|+uK1h$YrS|(GE6e&W/+FBelC}]+W!0:Y0%n^`>Q9ezxP');
define('SECURE_AUTH_SALT', 'i.fMPS^?z|iiJ^05S_]|t5`ty3AOQbS~vBj;K=j;/1:;S?LGtevYMy>ER++aIE?w');
define('LOGGED_IN_SALT',   '(qK PFL?UnkB[=yv%VB$X7Ij%cYvffPRe6Vb-)WY-[RSD&^O#=CnFZWL9R+:fmSK');
define('NONCE_SALT',       '8&D#bKOHsx/;i+|!c,?G1+)TJ BPrmR^bQ$jxCTd6/|_R5+|vUWEb0FsV;N|Mo(Y');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tranquildb_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
