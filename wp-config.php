<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL

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
define( 'DB_NAME', 'u184294307_bnpparibas' );

/** Database username */
define( 'DB_USER', 'u184294307_bnpparibas' );

/** Database password */
define( 'DB_PASSWORD', '@Glb21sp' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',          '9`9~&Tr)-Bw%CB7bX5(Xdzvhn@HJ9,/k;c;,$stJbz@e)B,M;8-J9pT{@tX-fi(m' );
define( 'SECURE_AUTH_KEY',   'l=nLz%ffYt.`ExQsA+K:xY.nv3<eIf#[rG4I*d*&4*4&L=(R5~G&Z,c4&+2cQ[%T' );
define( 'LOGGED_IN_KEY',     'WK2BTo$ .d,^8_0VT8wG7] dHrBi{C+[mx!5}D?uWFqH61o|39a,p;{ngzK,|`5h' );
define( 'NONCE_KEY',         ',)rwez<?md6+.0JE|1,p5VWed RXJ46du4x-n`{5sO5,)fLUB[0H#9(,gY<NKYye' );
define( 'AUTH_SALT',         ',e5DQ7x@p4G(B=NQPKh1 FzEzp-F<5XI8yiykg7T-d!fRV` zk(-NKZ9w,G0+&gA' );
define( 'SECURE_AUTH_SALT',  'g0RPw2!|#9w2xs8BGz4qygR}(r^I v2bpOu<yie$5IC<ryoZ1~$U5WfI$5WFIUxi' );
define( 'LOGGED_IN_SALT',    'vK+uY*;-SiO]]0v=tU{y`+?*BX+$}Z;q-l 5qf8n)pFggkpEa~j%`ae&ky[hiH-`' );
define( 'NONCE_SALT',        'K^_*^[N6mQCRKJ@[=RmKWDh7nuC2EorN3yn&O<d@^I?L!G/rhpOl~kN}dw|?}!,V' );
define( 'WP_CACHE_KEY_SALT', 'y00THvLW!iU+#xg+r:!B/%/$y<F$^>}8!h?.H1b{^7/S:@C[E#GaNw?=]^ZP}_,d' );


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



define( 'WP_AUTO_UPDATE_CORE', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
