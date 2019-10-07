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
define( 'DB_NAME', 'mulema_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '`{_t BmrI{4HgxxUhquWYCno7u=+E@zN@[1yyK;H<Q$COKe!8]?`)}C)(IlG^VO0' );
define( 'SECURE_AUTH_KEY',  'q[|7h3&/%OD0v})bjsY9J=/:v!>q3lB:qqvv]_x n5, 17HJdMUO0VaiCk a|==(' );
define( 'LOGGED_IN_KEY',    'D(F9@W f/KSocLi&U,.z-T[XhGP:I5n.I;8RD^j8@k0(h0hh]V3GMLlZ+`.5}Rq,' );
define( 'NONCE_KEY',        '*n<<8@Zs.vIlZNH5xf8^ rEspKr.pjYdIi.5k2*_324M(|~WLVKbmrFAjpHuvV7j' );
define( 'AUTH_SALT',        'A`dG4{Q%LWtMJ!=i{gi1thS]yCe?@]fJ]r|SmcV7Uvj%;-D_%n}90o+`SKu&@%m8' );
define( 'SECURE_AUTH_SALT', 'k:L2$Ql..WMJV,_D5Rg}pOr*P#uAw,6S_Rv;L7$;zV.4x:O%_&*gq/ 7Vs?xvS@G' );
define( 'LOGGED_IN_SALT',   'B{}X4[mUAHA>>O%.)s3`n%y,A.z8DJtjy+[gCwJdwf*6w^8.< :D(8E@||DfDf9N' );
define( 'NONCE_SALT',       'L-kbX*w6-b^Lo9pR?13lxO;Jt^roV`R+zCrdwJ>JiuV&OnHaDz+ G6~[ZP#Yb~+@' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
