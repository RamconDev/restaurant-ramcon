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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'KaI8)<0japX]][${{I;O:I{fk4=o/H7e9::EG94tQmKEYt%/3qMY8E3`w&Z-[1V`' );
define( 'SECURE_AUTH_KEY',   '-fr@~N~-zcyH}G(7SKH J{ZNuGMhuSTr$H)vfgEON(m4x{SZK+h:t<QBX~2il9X`' );
define( 'LOGGED_IN_KEY',     'OFzCKF/HkzLMq[PW?Don_r63Fv-[b-u2K_szL &mWq71s1qxl9Vf*@I%{}<Aj-A/' );
define( 'NONCE_KEY',         'DQ:!}/+vu,*ySq$3e7D$1v>Qfz?TXM%ms=st4#*,_3ty=Qk;P8^VE.wM<q/?*0IT' );
define( 'AUTH_SALT',         '.IzGLET+=|n$-MvLH$wFft<t@t}G+l9^C9:Aw}OZ%G7kS]x6}^?f G$tQlotO2tc' );
define( 'SECURE_AUTH_SALT',  'T7xcb}#nyi}]Zw:7yDa7W3lrp%qBUxsf1-)}d@=pP}EmA>Y F/B9Hraz7,};?qv_' );
define( 'LOGGED_IN_SALT',    '{4/F`2eS`V0|G!cv/5+7/br_Cn$D,7H!XL?Aiv(t$6E6`e 2N?U!)#zv2T*o_A*Q' );
define( 'NONCE_SALT',        '3vJHMR.#?3T`UaT*P`5Xd$lRkfx+)cWiJXw9.^7>Duksf@#<(@y-zDK{^8tkLQ4P' );
define( 'WP_CACHE_KEY_SALT', 'tq;u$ L,s7<.1ZB,),Az{[Fk]kQeY/_{H%qGn+numx@^*v`!xgYY#M*EVN2@cc1 ' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
