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
define( 'DB_NAME', 'cial' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '/Bh<;0e&am8)])8u$(Of7_GX&TZ(,@8rstFzt;/&5&$0Xm$JpsT;cfe)-YgG+14/' );
define( 'SECURE_AUTH_KEY',  'hlqjI> xiP+Eaq9=%WORrWNbM$|z8vtd}j!,,*&FNsL.oro,qq3[RUPt@a>^cS<5' );
define( 'LOGGED_IN_KEY',    '.Ym*R&lj=64?}C3wnf,gG|IO$xzi|#Be@Y6z`Y5mU_Tl/C}CKjv37ON}Sx9DH~i:' );
define( 'NONCE_KEY',        'i.tTU$ L*3YQ*i;GfNhIDu:QYF}H/vkT%WE?.>4tG}aoQpc8L5RX~(%H`uKvLCNQ' );
define( 'AUTH_SALT',        'm-Ec:1D+!<?dD~d/ENcbFoOx{?^K;P$UbTQq46}]w|!Mp%z{!-|4^&gUCz)%EzNZ' );
define( 'SECURE_AUTH_SALT', 'nw`O_rB4n.s^@DqH0%*}{R:&6<wmcfilWDGT;&})MIjo(k-oee`oGy8us>6ljTr;' );
define( 'LOGGED_IN_SALT',   'n:2!tnN1HX~fF=jqs$&9`~/o- WwIRiaX.XLes$.yM2#mFPcqI+Yc^QQ>A_#17Ar' );
define( 'NONCE_SALT',       'l|6P)]W824] p?M7=]a8!0<1q=^dkN$_4&Gj((I2&)s]1wF-n(E;i#FVF$o;w)sm' );

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
