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
define( 'AUTH_KEY',          'EB=%^99 cH@ZszJyhJj1+jIG*-N|NF?^mbiJT9X[CUl=ACfg7B$m&8xT-D+-[,&$' );
define( 'SECURE_AUTH_KEY',   'k8mk^qw(9XMkDbMq>@%]^w T8;81GQ>/qadPOyemu{65#r$t9BHoH<;(0GD/h}yK' );
define( 'LOGGED_IN_KEY',     'I._e&8Px y;Iy 9n&x]HTVimjycO]u]L;:, 1xPZ(^uOL)=zB}Vup6=W(!1S5n* ' );
define( 'NONCE_KEY',         '1)[L|:vw}B2ig.>4Q}dJEG-mRE{wN-)_Y-cc0W@fIO9:6/yxl~=!LSPq5AZKRD}}' );
define( 'AUTH_SALT',         '(wtT1;&es_]s@K4`?}`J//3<n%_*-ADB>ssenA^{h-72V%|nd2#6=_$r#9]56jHQ' );
define( 'SECURE_AUTH_SALT',  '7mi`hb8U5$&o.`}F6f~MXfJ_6Qxiah&ICt * B:#CF?QXl.#zioq~I|Ek;I_9OtJ' );
define( 'LOGGED_IN_SALT',    't,V_%2d%Xrv<qhuT@@hF}30T-jp8@G3u5fJ7$QOIa]BnzBP0>`bGemmEOjk!<cIi' );
define( 'NONCE_SALT',        'jj[XNQ}Y3pHQ*xH1QjK*d~t`LH~zreE|w!>~|Vt5X183UG4ADo1/O7I1|Zni(6I`' );
define( 'WP_CACHE_KEY_SALT', 'mo31].B0nm1mGW,oKr,3gRtSyX@KE:)9I|<B(4m/5]${u;qUYgX2:W1}3|By^cbH' );


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
