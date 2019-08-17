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
define( 'DB_NAME', 'base_theme' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'fGkpNLPC.b{9AVMvfP?x4eG>P|-Ig7f;+g%Hb#a6Rm`b%l!(?oIW9?vgmJv+Ajga' );
define( 'SECURE_AUTH_KEY',   'haw{5qZY_|EBDI33E5Ek]<tOGtRk]p4fuftV5mB#`jSpd/q.p:f4SR@ci)Ld67[8' );
define( 'LOGGED_IN_KEY',     'MZ!|AWkP[*2ftTq}O`Kp5Z}QWzH,C3k?Hvu_S{5FBifGL^l.5s[pAv]C /C,)jJK' );
define( 'NONCE_KEY',         'ZsS.gqkP}Ym0+,mWd),vOgs#I~aJ_AT|Zk&vsIP#Hnee<nT4%2cXv!&,m214*&hg' );
define( 'AUTH_SALT',         'Loj|!BCd8|DBKd+`DAF%>bay_+s&bY-Zu(OfJY?n=B}2P(r)O_)p]h:2WQJjs2#X' );
define( 'SECURE_AUTH_SALT',  '#mC;$~9XDIh2XjL:@Uk*v]h@!R3ouWaG~&4gPW+1-=Jez/6/~p$g}4u[M8;JL|S=' );
define( 'LOGGED_IN_SALT',    '!WhEkLOWoG~F_L.a[EgDcfdWY-LJC|X9yN/HKzH0[_h#S/`wzMA[2 ,gnPMk6p^A' );
define( 'NONCE_SALT',        '`j%`(~$h+7:z-?E5!&@_4# _SB.1571Q<uhzo&Sj>M+@[?/3Bp67h.{;Rs)hAMv+' );
define( 'WP_CACHE_KEY_SALT', 'cioYQ@RKqU$})Pi!|G IWlVmxyx}Za>72FDE9ed}^RD4Y<Wz`uPfxLZ&ym>7d9TP' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
