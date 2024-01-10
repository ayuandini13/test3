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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test3' );

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
define( 'AUTH_KEY',         '(99eiDn0.Xeecx#FGu`hL{RNKf/]@FRQfR$CzGh J5 !^34_A6QAgw`{8INA6d(*' );
define( 'SECURE_AUTH_KEY',  '4p!P=(~$0)Of@+Jeox+*I$CQ1cB$* IfF[{gF}kQq)g$ID(r,eQi#M7,>}:M4t9g' );
define( 'LOGGED_IN_KEY',    'Qbu.%u=e3[Vjs~WW)J&=y1~fK=6RN-zq^57bo@I1laM7.$?o,qDFDGPZ4C@%.>|=' );
define( 'NONCE_KEY',        'ck TC [=J(4)e^~;]WPk]3,ZFA7i?[0S[q0J?-sr4C^:{M[-h-/qEHNbFvgoCw/S' );
define( 'AUTH_SALT',        '}4m&wz;T35[H{fdM4JB%7*y>@zKI-L*bx#!d*u;i:^xVx!a6[:E_xsVhcNU$H`5M' );
define( 'SECURE_AUTH_SALT', 'VaP<b0OXYpl8x>6;kwjFz+(&F!2/CN|q=K9n`/-tw=N/QI+S1oZ+w8X,PVi(qzi0' );
define( 'LOGGED_IN_SALT',   'SBXVFEE4edeMJ7FG.dHTU&9uot54M< $GhGG{$5JQB l;kkzD16w,07JCzaS<W/]' );
define( 'NONCE_SALT',       '>{S*50N .8v:tn0Yl@8Vys)UTy8s:uU13?Xev:`|-gC<D12oj0hD1f:BQKvx!^<W' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
