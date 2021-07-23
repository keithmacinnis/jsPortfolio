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
define('DB_NAME', 'eaglesad_ss_dbname740');

/** MySQL database username */
define('DB_USER', 'eaglesad_ss_d740');

/** MySQL database password */
define('DB_PASSWORD', 'Q4iUwQA9mU1y');

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
define('AUTH_KEY', 'Ot?m]&[Ou&JHEyYoAJz@=okaRU;/JywItJRzT(hrrQK(Oi|W<Mt+XFp]jkkd;BV?<QpkNXi^-sInK^W]@>*&dqvJqUQBLKYrI/$p_gnmQZ!n(DhYP_xi-mgav]rBOrbG');
define('SECURE_AUTH_KEY', 'l<h-x*UWl&F/)!DaaoWvE/=DSNoI=TvCpWZlMt>xLrJIhgsAOhuvAm]V_igUK](lK}QdfyEUmd}m+?z&Yvk=;TCOsQ<l;=*MCicR[W!lZKygv+|LGSNIyKJf)jvXWETY');
define('LOGGED_IN_KEY', '^GO/r[LOvb*dJ^}a(yf(ImUMS?BYaIhZkqxJqIcl/]QqTL;=|?cv%R+eHxWDxM(=]k&mzYThTpe;%[hK>;<;I%?_RljsbZdQEqv|/aM]{GZWz+dWcmr^jYURFSbSv@j^');
define('NONCE_KEY', 'T%)CH|$yTk$nT?KSM@ozn-&giOkaBapc{oF{o-+{{JPtoiQ$g[mG{}InNZ{*o@^!vE!_Pl%w/)@KrJenox}w;Hxsh|Yw<u){<WiuXeeSlszrC>HZppz!BeOAvSJ^oJ(!');
define('AUTH_SALT', 'BWFdy{SkET!XzBP^nAa>nYiqPlozRYp/TP{uR|WydIWky&@hY%eIHBB/$JZANB+qzUuAP}wjN%KxgPp((yE@W}}r!xDrU+hIrIMJ[XprJgNtgrtfGBA{p$}!M)*UtQ_V');
define('SECURE_AUTH_SALT', '(]bwP=(kZlDW;c%NZ<!ibpa;w=;WkdM/nlEsRq%Rd;VhPWxIAv{Jhg|soRx&x[%Ev_C)>ja&K-_dP{/{aQ$BPygNFT>gf@{/ro&rao(xLw_?;equQ|S$]KZXsnIgVYRm');
define('LOGGED_IN_SALT', 'eB&iuX(hoXSvl>K]vXL]J|Hio!bTxo(cJL?hrwsr-z%x*Uju_^x[@YpVl$&YaL@Z/uK$&Q-jbCQo-&mK+fU!gwP(De@NhLmgPGQ?h]PKy^cdJcvcduSU@C*P?MNyYWaH');
define('NONCE_SALT', 'UBlxj>]EDOvxf;ck)Q(?LQQ+jTAq_QuiJUvV%^&Td^f!h%MDkYE^YYb[FmVs%*jRATxyPtQu&>SfQOff[EQBiGm&ONseFjDlXvbo@Xf__$D*LqUO!xzZZ{$VLVZ?;|Op');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_kyfx_';

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
