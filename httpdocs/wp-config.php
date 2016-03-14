<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mbd_wp_theme');

/** MySQL database username */
define('DB_USER', 'mark');

/** MySQL database password */
define('DB_PASSWORD', 'lecter73');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         'Msa:@Sp$#PBs*wm5UU|mV~YO~?16V-7=Pq<i[j_2HPTN)!`}CR(DMf~_2>d<cYcE');
define('SECURE_AUTH_KEY',  '+_V|1cfr[>?Ec_Z^WZ]UlhA~19=S2)XGA;HcH8,,Vs %}5y/uy{]$o+LwfouBZYc');
define('LOGGED_IN_KEY',    'Gmc+A-?J/`+T{<Q6>zE|&JqH[fQcmTE:-uRJg^0> sQz-|%^7|OL#%q#~;:|d#%<');
define('NONCE_KEY',        'Qs{#xiBR<MKS^)EU4mob*nMz~GaZ94l.Qv-GXHjL+!a>]>OMP}IyZ2%kBk~G+5u0');
define('AUTH_SALT',        'uRXd9!}{d-m]1frOGghB-xX|JfD1@bZI}lL?/3|,0`k`|[2[:{|`i|mwlo,{PF8a');
define('SECURE_AUTH_SALT', 'qgo8W?VG?=$5S/906B!]F6xZ Oi$w-|BWT7<)[AVMQ-f3jguZ$,mL~q;4{C22E}@');
define('LOGGED_IN_SALT',   'VpHD=P@71}4*e<DRe;|0Uk+@5jsY1n0}f{[uO+X9?-=Gx5GT]Zh4)*$vgO,,_}-8');
define('NONCE_SALT',       'pI--zNdaVA8UQ8_s ~H.NzJeezhd_y5WBc)/5,crji|!VCTx-+h|kv$-XRr;`<w{');


$table_prefix = 'wp_';


define( 'WP_DEBUG', true );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
