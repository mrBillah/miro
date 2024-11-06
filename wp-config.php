<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nexcent' );

/** Database username */
define( 'DB_USER', 'motasim' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         '06zk?An+6MEz4klfOdOe}[]o3d|e+M$W{A[@Ra&9$W~5Lq^w4nq1C$TD{8EPR4+A' );
define( 'SECURE_AUTH_KEY',  'ul=E>nd1&-_x$~#}tW,i.?}=[*_9o`,%[1i%5rDl[MTCAtob`L$z3R)!|s-&$10T' );
define( 'LOGGED_IN_KEY',    '`3h|YNb,7c+kZZ)Lze8y*^|Z#w%~|ODZJ9c>2;|3#AHs2m1 _:{MkOT!Wz|,gZJK' );
define( 'NONCE_KEY',        ',6EyaT%7&???{]os@6u5p8on!~XXUBfI=sQSL|PJ}uUO(L$:EIqLov}XM|;[%wQ`' );
define( 'AUTH_SALT',        'Db7m0f8-N?VZWW4/50hO>*?#PMV4 =-VclaQ7IY3mBhBal9mNm*O@!kujh(r%tZm' );
define( 'SECURE_AUTH_SALT', 'dlE~{Rb&9gGBIm8d_VuylvJaKBTE+BTu|QrR`*4gYs`oT0~N];<7TB~qEmk!H$AY' );
define( 'LOGGED_IN_SALT',   '~TG`KruXT(@Yf&%m1r:F ASRewLPmd6;3Sc|`&z$DHU]GiU/KN=I$tE#/%fQJz[d' );
define( 'NONCE_SALT',       'z&+9c({h/Y/w*Y+8jq<Jofh~.;3zIJuMSLq3?(hBGOs]0wQx;Giv9T|i}slawm.u' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
