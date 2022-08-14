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
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'jmacmill' );

/** Database password */
define( 'DB_PASSWORD', 'strongparol' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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

define('AUTH_KEY',         'yJ&wjQ]P<-$~B;2Ae%cvcqmE9-<FO=N#p_*F[Qw~t>jBRC|~5}<C!o!_qlLaxGBz');
define('SECURE_AUTH_KEY',  '?sei4oo{Ftpugq=B]r.a=f|j7sj=Q/F+w<=c(=d%U<5|.&e_o[l&k+.DG1z9/RNY');
define('LOGGED_IN_KEY',    '&Fyy#QenncF<>0n,;HJ$DdPRAO4d|UFV0D-z3vg/VRm[Bk?|/s7S6v(?Cg_W(;x^');
define('NONCE_KEY',        ']r!w<s$g{*1UvIN|@oeu&^a_=hx=,3|,cTiKg1.Bo;=?fySz:4,/P7%*V@~2cGEW');
define('AUTH_SALT',        '7f]aWd)aGabRPshzz]odxQRy!.A~s>x@##v vzJN<P]-#^ da*@sH1lJ;gM&Qmt>');
define('SECURE_AUTH_SALT', 'X=_eptasjm9b9]p00qgLG>-f/iDI%#xz/d}9~c=/(l6FG1h6g|(,yBa)|-<prF{{');
define('LOGGED_IN_SALT',   'bU5kXB>V%o`BsUJoV]Ks=+gBh8TCDvkI 8yNeWOs(qlc+3{(Ng+FTj<o73% ;E3x');
define('NONCE_SALT',       'x^/zI$)4ys9&p1kgilH@bI+-hen3CDtG3]X|}6L&CQhkX5b$+X5vLr-/,6Vl -L5');
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