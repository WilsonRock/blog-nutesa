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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nutesa' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
//define( 'DB_PASSWORD', 'password_here' );
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'j-mAw3%9_+fqkXvTFPR6JLHr`=pPHw$BDW.jxZ|X7ZdIb*I}OEag,iPSz_1ivb{5' );
define( 'SECURE_AUTH_KEY',  'nBZ<ylE/ZV(Xy+4#:zp7:KYQt80?`ZPOpA3~X{nyf)+Z1qN:+-Qd2^[9T ysO<En' );
define( 'LOGGED_IN_KEY',    'aA?p[+u*jr~3/`f|hOT;38,R ?8UcMY`Lz+l:~rn/~A[QW~du-Y[30+w%9>6Y-HW' );
define( 'NONCE_KEY',        '7eX$aW8JpPKT^Fu5^J;h%R.5~6?hm@%il2nz|AE<,I)G.o{f|^J+./sx>`fSspBW' );
define( 'AUTH_SALT',        'nK6B7WS=)Gojxu^t58mwo~Q<[[-t]@9{oGoQ,`LzCDGye=c]FAI$}4nK6>5%77S7' );
define( 'SECURE_AUTH_SALT', '!sfa@E(x(J3@ix-)9!Th*[d9?o^0B3htg)0#GA7icUJn~*8PEmI5:FKMkmdQ=*D|' );
define( 'LOGGED_IN_SALT',   '?6N=:k?O[0!}B1imIbEuyPBlt!PN](;0:D>D]?,l{9DR19|:RFnUbVi_.&Arn K}' );
define( 'NONCE_SALT',       'H13AsjR[$syCx0q]zb/r}kuJ;;7|UF4Sp+%`yVO? H)Vk1a9,-1@LnlAnQ&c$HTo' );

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
