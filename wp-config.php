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
define('DB_NAME', 'adas');

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
define('AUTH_KEY',         '}i.r4C?8xi^HiB0!X+@GZc$Z o]Ef{%W<)*4E:VIF7NBlhDu)9~vETtBT_.+#DI+');
define('SECURE_AUTH_KEY',  'B<WUx_hV2S;~NxnX<2*j8?>*m; H@{S82)}uKpDi3n}%DTM<<D}2 SFN)Sq;<dEt');
define('LOGGED_IN_KEY',    'pc>`G? 0c{oNl3` 0cUB]r^Yx`YjL#ErL+Aluqbnmt<vPocKd(a`D[;.9Q3+76IF');
define('NONCE_KEY',        'Lvlj!>bOs1q6RV91VwMi&.bQ!kt32doOnA3HWji:%Ps{nf|36%F?l,T>L05+osgs');
define('AUTH_SALT',        'Dt1/+l3j=fJI-7DOX;tCjHf80S(=SQ&EBvNRX+X`<jq^,`[504bQ9kX,%<@}Uk x');
define('SECURE_AUTH_SALT', ',Gl2dK~+T6y%r;%pSvt%5(gq.:B.][gGQA<D:VUl[^INUBUEtPwfyhOp5{vuK{U|');
define('LOGGED_IN_SALT',   'r=l9 Aw#(B^{@C(>H+H~8a-ky7PmR/Jw%OGz08`wEf6Rpcrae%v*YgdYzg1vJb+w');
define('NONCE_SALT',       ']ZWz!Bsr1o{Kx_i,&!Z;N}EFmMb/^?6deKJ%0eOO/PS-tOKq#~C,(l!;tuKAJU]%');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_adas';

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
