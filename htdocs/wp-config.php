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

// ** MySQL settings ** //
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
define( 'AUTH_KEY',          'b;Ax|^h.EIrW )(PcSg-HyQO6~cOX-V1|~hbz,6w|`gu<wS~chF6pXz%/f?WckZD' );
define( 'SECURE_AUTH_KEY',   'Cg89 exmID_0/bGn&4wJDbPp)<1dlc5IJ?BL>;EDlJbk1$@(NMkCsBFju6zK$_:.' );
define( 'LOGGED_IN_KEY',     'rB:,O2R{Wmbnl9MR)^t1g$6#8>|8[b|kndCE0&aj;L/dMuj-hkzx|sP)[G)_1r$j' );
define( 'NONCE_KEY',         '54 ;USN+h)7L<+;jTeYYs>QtRkc.nyAmB2&<sfAC+PrU51MhhBbg]M)HP_1e;#TZ' );
define( 'AUTH_SALT',         ']LW{MVKZ)$O6AFkDy:#I5!yU3{e:h~Io{:O65GUBi>KKwe6wEbgAjM&b8DSR4mg$' );
define( 'SECURE_AUTH_SALT',  'h@I>QAlMV3DTit%z2CS}.aYXI6TwL=?f`t?-f7|m^z5k@*KHqkX=-=*Q5)NIt~P5' );
define( 'LOGGED_IN_SALT',    'wjGu0>?oQyNg#NRVmU)9&VRO/|8}okR9W$=JNK~(a91x>1N%Qfc|f(;&2_tdX!#y' );
define( 'NONCE_SALT',        'C 1#G[C4xR8,yhheqk;gfnJ25e2][}Bxh5bS-tB[sl5*jGL:4=aq:]$.lS`5=eRp' );
define( 'WP_CACHE_KEY_SALT', ',V,eC;DzzKL<-A|}F(/*2vT~iHc>:`CPoGEb*4A(/)[&N:8AS5PVUyA:3m`r2UL-' );

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


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
