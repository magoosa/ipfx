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
define('DB_NAME', 'ipfx');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ' /U*eZF?nfR]rRC44$2!Is|bWT},te~w`H3J.]t+3[Jo:Yf8D|F}po7eP;wjhhy!');
define('SECURE_AUTH_KEY',  'c(%O1uXKTRJiy_!0$5HOv-J}N{b2T`bN)FyJH}/^#!*m32`0UUboJDS#WTJ:$gLO');
define('LOGGED_IN_KEY',    ':>1,}+J]BT5y3i?l7/k(8eGj+NLW}RI]Sj{Kyo@s>I1tZsOH~v{o!9v~%Kk?r[7_');
define('NONCE_KEY',        '>{XSAD(wKQk!`?yF?[e| b!$;,/EXy:lwy7dok`xCu;]F!rCu#)bB3VuSG&1+F/<');
define('AUTH_SALT',        'O/1Rtiy M$O$^wbrc87Z599;`}qq#`]<V2[HSgb~6{+(Hsa.c&wwFy5[a8Jg2)2b');
define('SECURE_AUTH_SALT', '!I]uCNbhi#f`]{yw5K/S2=ilVi7JrWwqeAyr;Yd,} >(.RIyr:.TmKwF wmAD#b1');
define('LOGGED_IN_SALT',   'hN3Y)G_n@~OrZ.46!:(6fVB>+CU;uo!lQ_e@O>!-cH/|}Ql7C2R[=mVgu,?*Bpya');
define('NONCE_SALT',       'di0p.AR4SB9XTIvj3|<_5$9;^sL2jZ4?&PLuJ.il`@lG/A=vCf]7W)X>6BC$IU_W');

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
