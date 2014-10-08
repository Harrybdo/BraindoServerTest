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
define('DB_NAME', 'wp_sql_database');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'Pssw0rd#1');

/** MySQL hostname */
define('DB_HOST', 'braindodatabase.cpz9xhyl2caw.us-west-2.rds.amazonaws.com');

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
define('AUTH_KEY',         '_oMq2a@ck|M.v0|7xB&8EX<,r<#HCsAa0|@7CNlT+7>7-s/J%{^yDmR{Ap,3#_NU');
define('SECURE_AUTH_KEY',  'jv$1@lkSC@YT!U=U:2<[JbWAN#M$/OMz-9tlZ6t&,O+@ST|{0CR!lpR8Y%K: nr@');
define('LOGGED_IN_KEY',    ';6iD|)FXj~:F2GGBKISWdLjgiX47|0lFul;+cvJ1-81KQjA|TU1dp?I(Y@+Kj`iO');
define('NONCE_KEY',        '7(Ge<bf$A5;tm>!nSl$u4Y-Mt.lwlb.{W~WT%w;V#+.@k?rK{jzRU OeN)-?+lHo');
define('AUTH_SALT',        'w(U:,x0f7v0I]|pt/c0hQJrr9,JEy9Z~V3]@2.mVM?JLh1b/K0kZz;N$5N@6blGM');
define('SECURE_AUTH_SALT', '$kh`u#P/fsp>OA7xYEV-3q_oCFG290g&o77rNy&t=dA|)G>|4AU=J#Gmn$q5Q~xn');
define('LOGGED_IN_SALT',   '[&A@ci/j7fuij=W6ry~WQ+ieG/!eMWnvP[,Jg@Pxy3 j3DyMBc>zZ_JB8}zUVGBg');
define('NONCE_SALT',       '*bE|~<&.10 Y0@X<wbU`Qu ivCu4|4}YxnDm~#hN0?[rtOl#Y#q:Lh4`SiMt9C5X');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'braindo_';

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
