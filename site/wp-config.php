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
define( 'DB_NAME', 'quiz' );

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
define( 'AUTH_KEY',         '9w=?1SIb3DCvf( TmWLYSCYIi?0@II/$o9rLP$J-y}5vRC6A+Ns@|Z/,xJ?_{2G9' );
define( 'SECURE_AUTH_KEY',  'C>&W&QFcNp|M$gAqC11H/1a,gyuM+J%*vHga)g[KU!{v{R|3[L;cpbN}uQ`,4P/=' );
define( 'LOGGED_IN_KEY',    '_.ZC,uEa4-mw:>D$z;CYvNoa66e,.GK:/_pTEU06xNuF#9?YkZ_z{8fL.>~b Dq~' );
define( 'NONCE_KEY',        'v0yYJB/^~?<xge AQrMZ`WqQ$]U3gw%pr*!(G;v4I`#MqrcVd@W?W[FD4S8o^B@B' );
define( 'AUTH_SALT',        'Za1b_&6kk-IiRE7:pkd^er*)i5?s>0|4&@mFf*&SZT``2SF4(E{AO|5YRyY[uwL9' );
define( 'SECURE_AUTH_SALT', '&05;A2mT}`n}*$%{er>@a]@!$|(+}S6@mrWQ?}}>:71,DXC4*v8W1DaAy}*9`,D6' );
define( 'LOGGED_IN_SALT',   '%Xy1;?/XO|jaGv-%rd.{?o_[$AP9 T3{jy$j,gULp(3v>K$0|p$(2$7?RtW+GwlW' );
define( 'NONCE_SALT',       '>h7h1YVlgoyj}^g]%T:6^ur4tws6I)zMM%+yJF=FbSBL,  nB{,EaniC-vjv|fp~' );

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
