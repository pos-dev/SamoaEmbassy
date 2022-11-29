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
define( 'DB_NAME', 'samoaembassytest_db' );

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
define( 'AUTH_KEY',         'KGDi]Qctor}KrSN?YU6D`D,/u__NH4JUy@_@YUfZtn(U@7$yC7HGI^Ys%Tf[`tZB' );
define( 'SECURE_AUTH_KEY',  '~!ufKxIsM@u_]_9wAB&b},=*`<t>;th,{)az`6NiZb4IOsb~Rh4#u*MOPr<4ZZ}4' );
define( 'LOGGED_IN_KEY',    '?}OxA&$,5Sp=gBd&Y%rwf=;9#|_f=2t*s3#Nw((3S4zWdRM>{QmwF+i}q^wP(jt3' );
define( 'NONCE_KEY',        '_Od#U%g{+/1_$(zx^u%=SN]!,KLRa+L~O3A^GonVvk<Ju!km;9]Bv<axv7OiR6PZ' );
define( 'AUTH_SALT',        'Ye</mClE5;,/TC]vPiZk-T#nGgQ){!xS*uVId)KOP.v[SFU!T,Pd^az^xSH:yq[m' );
define( 'SECURE_AUTH_SALT', '5a4QHm5,3__ksdh!b1S>soObsv_ n5mqz1dsQx!SvJ;_R382Bjrxi_llB)oRs[Y.' );
define( 'LOGGED_IN_SALT',   '[l6$upKj&`YtQAlN@E{`^FBclD~HY3}c&z7e{q-+kr,q$sV+8FBd<QlR4U[](0F/' );
define( 'NONCE_SALT',       'd:f724K`&bui5:swVhtW 3L1Lb&$dfRd`fN-oKZNmY|M.}E24OV HTz93:`K)t6I' );

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
