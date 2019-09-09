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
define( 'DB_NAME', 'wordpress1' );

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
define( 'AUTH_KEY',         '6bV;c!|?7U4A2F[#OUEhJ_).x+2)aEo>zSH-$2u{w1*{CC-_(014 o9=bsadTLlL' );
define( 'SECURE_AUTH_KEY',  'nR/M9H8Vgu u*Du_ =-G(2$Jdq.Gb9`HI&^P;N7>sI+`rf!YXP>`t.4,Y^QQq#ia' );
define( 'LOGGED_IN_KEY',    'S-$}A7!z%2.4T]j-P:/tJ$5D0w*`#mG2txFj3p)oI+HP2yE8m[FX7s|5--JQ@V4l' );
define( 'NONCE_KEY',        '_0o>6+2]qvFBGPt _@31j%y.61JEinzYqq4KTX]Bf5uamsLx[z?F[0Wyn+2mRb0g' );
define( 'AUTH_SALT',        'u|}0%Q3/&/97l sahEB<8m^XerD4!]yfiF#s`oRn;pebgl=luJTfM.)jOQv0FUk*' );
define( 'SECURE_AUTH_SALT', ',:6StPILV3Lzv&Ot|R+baZ^[ELmsUz WDd$^@qbS?s_o>(UD4js#AoHG%Iug(e8R' );
define( 'LOGGED_IN_SALT',   'j,S/l8Qs{:72VDE}~~H{_!nYu8#3DP?T8:@5kor){a~Sl</*i}YbNSvkEdtC=/@+' );
define( 'NONCE_SALT',       '|Mo4,2%my`e`i()^~}q;typ(JO@OjZ(rvJI}?6kdV+`SidA9e$C 1?]]zG2lD3hZ' );

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
