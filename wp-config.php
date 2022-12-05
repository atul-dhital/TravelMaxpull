<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_travelmax_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'hzvT7@ 2p7ODU:,aM{UN;Yb[8/kpu4U]-Ns22qG{3Kcn N/D0-.!T{<4}y0)h{R*' );
define( 'SECURE_AUTH_KEY',  '7KX`KbB`2+*Q[_wLrK:p@^IYr(!I;XDiMj:K=UaOo-1txbEerv*(JLXcGj0~3q?[' );
define( 'LOGGED_IN_KEY',    '#pDC|C9tACwzjrQ9:X?3D]Sr!T+!W|q6q(,!f[TMN9#ZR!pmJT=Ss];B2?lsLUlz' );
define( 'NONCE_KEY',        '$ly*J<z8/T#FA ~(%P{>EFs=^>QEXadC2XZLW$}_-W,2.j)pv:E=fm:{HX}jM6]5' );
define( 'AUTH_SALT',        '?P<_?2^]LRXUol&)?46L:uj4GcmJ51C.(!&8*wjC@u1ql^Uq<Uh]_:6]5/?/*C@+' );
define( 'SECURE_AUTH_SALT', '3MZ qau?`b7M+ABU8aQAx_o{h6&tm`x|bO;vFe0BVF0kH|3k;f;! {ZHwuw!Qm-l' );
define( 'LOGGED_IN_SALT',   'H!vc#p>y*H,RoaVlBok&y:{qb^PVnDUEmiSaWgM~C1@t2Zxn ]AsXPHQ]=.Le_w.' );
define( 'NONCE_SALT',       '1KVWCz0GZCWqgFpDk6!<4!z{}uLvvTp[PNzbb^f3[s`UK+q_3vZy}Q~5`C79V%74' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
