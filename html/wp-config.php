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
define('DB_NAME', 'braindoDB');

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
define('AUTH_KEY',         '&|7%yqb(-]oQS&CE#Uc|q`}SoWW{s)Au.=BcV+]3+&ogvwbI|u!1xYv*,K*b6ojx');
define('SECURE_AUTH_KEY',  'Xg@8KF},iZ_$yqI!J#|HbF%e*U&G[f|DkFjhI^7CX10+^HQz;7L/M[_h5Qx%=Q[$');
define('LOGGED_IN_KEY',    'R;/l@1)V_V>CfGUrkRDC>QrO3sj0C~73UuKcR4NW9ow7R15w%0#Q|S.7];k:wR(h');
define('NONCE_KEY',        '*4d37a3Ju8G:Eu/Hcu)+BM=6[jEMyc5hr|`C8v3RR(>[}F@6,Ii0?:i]V],d(l9J');
define('AUTH_SALT',        'N^$GumzBH+uux+Z5W-a1,}o~n+bfY3Q7]=T1?bqPH~QbNx)/a&Z(b06*yt9n8x T');
define('SECURE_AUTH_SALT', '--77I!h*_IHH0qPCQ<{Kz:|&^6t5_#!W*2+b<W@)NNO]![-?JhQyJ^;4<~VBdcEI');
define('LOGGED_IN_SALT',   'R?4sWBga$lYv*F)Fp6Eg67}kF[iP}j|;ov%kaYgC&Vi.(3@uQ5A9*J<i;%_C#+#^');
define('NONCE_SALT',       'JW%LX?rWS,*)Qh$8&Q(X=|mxjK^1eV:okhUriR:,#08_2]>Bs#XP_ivYZ,F-|AB<');

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
