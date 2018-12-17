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
define('DB_NAME', 'E24CP1A1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '5/{!h}l+NYQMgnITYo#1Fb~hU _oeWkbt!k}9d_&/#{#+Rz-fvOqc.d&v/M_pb=f');
define('SECURE_AUTH_KEY',  ']FTw&>}8HPo-tNP+0eWc~tV^4=h</igX(*8>Svu;]0mY]qNImC-foRh3Ha[Cgp1e');
define('LOGGED_IN_KEY',    'k>AzZL`G]Pqkg+`W5=S2_IL:x_T:72(#2.%-lMWNeV}.du$CM#0 !>HvqxCR%Lom');
define('NONCE_KEY',        'B{PS;HmN9z=q@I?{JAGEj_<m7{7*c)@<76*d4]<.TMc^%O-=uogg`0%l2QX,a_,S');
define('AUTH_SALT',        'q*[G)L!33-xLRj+_y4IEl[R&!Ya)@`A<GR&N<]Hk)U-x?%8^8(=GSbs>!V%y?GX*');
define('SECURE_AUTH_SALT', '2Y!>:+tX#}6)vZ:]8SCnWRY<j;v5gI?^SsVw:0id[t#s*kG)4Xg+.jA:?F}i.Q]-');
define('LOGGED_IN_SALT',   'TRf{3kleVBumpbh H}=<)Z[vFY6%tveG/fjHN1:M[/AmB5`F5yF(lU9pfPR?<-3#');
define('NONCE_SALT',       'b%Zz%#1OA,Y0R&pMU+p,af8!uQArwmy0a{Wk>)oEOumtNd17;eOJKU]x>s&HrS#c');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dl_';

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
define('WP_DEBUG', true);
define( 'WP_DEBUG_DISPLAY', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
