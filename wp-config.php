<?php
define('WP_CACHE', false); // Added by WP Rocket
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
define( 'DB_NAME', 'hotel-marina' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          ')cjbq$jFxOZ?N?ga5ab$@]+ UM.9kbvtxIu6B+$$i1Db+c&SxcZqKZ^UI2@yFTVE' );
define( 'SECURE_AUTH_KEY',   'rn(eQvU$w$&PM&2&GF -D% 2&:QI(<&qU98mWVVf7%[pskagYc1a)WoIW. {*j$I' );
define( 'LOGGED_IN_KEY',     'e/u!Ft?T636b%J.$mm~&MP6N#l7Pa+)q=E^,%mn:hzHlt#]aKCn{%iqgbnjnwG{+' );
define( 'NONCE_KEY',         'KGV~UpGyBIMRBqVPF>jDNfd|ctSu0t,.aHjb0mlP0I%YZD;67Yr>:=ruX(!5LSfh' );
define( 'AUTH_SALT',         '5ZqO6l0JZ=Ul86.7VJdw{GT2y7&ry7geO#VO. tzbv^-LZ!AvB+z(n+VdB:npyZI' );
define( 'SECURE_AUTH_SALT',  '[@0VA?*vTw|,_tpK~=dU:+NOLKjR_0W3W~Nbwp}s.g]8xlzt2;c.4w>eDnE]FWXQ' );
define( 'LOGGED_IN_SALT',    '5zMI/k>QH^>ud?q>H!Qx*K[Hac1~/>uCjm;XqgJi$6,i%IWF?M%+;NMLS8a3G6yn' );
define( 'NONCE_SALT',        'ch)374;n1Y$1N{lIRXd5AZF_xg/0[~r*,1,}e?sFr]|4tC|)}j|y$SSL4?kB;c4z' );
define( 'WP_CACHE_KEY_SALT', '_EpM)4:Hu,A!^QtNsDR4jc9!xo6a0|r1LscDo%BBE;|;P}tu[:YhSAC%-zJY(~w.' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
