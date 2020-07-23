<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'medicomgroup' );

/** MySQL database username */
define( 'DB_USER', 'cayle_mnt' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Cayle-Mnt@1234567!!!!!!!@2020' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '_W_fL4)uVS-){@,lb0Pw~.m3.7dIb<1j76+sqs|TvffrPVLS+=|hFVg@|Sm$31^$' );
define( 'SECURE_AUTH_KEY',  'YX[.&wB$H36jO-vWr([|<PH#8cBJoCVCj`-$Pd^;>yxBO3MQ6z ~lOd-IZs}=x$J' );
define( 'LOGGED_IN_KEY',    'i+ej~{A,{[!e/?D;/ISW`TT` )@UX}C4K(qqZ8~MaJ;gumk!ZU%f*.JBpfGlkSOZ' );
define( 'NONCE_KEY',        '<&~V4v~l?2zS]wF%Ga}Uicb2!k?_=?-M.R:b0^<@Fp4C3/bJ]*PWG?X/n}bPB+=0' );
define( 'AUTH_SALT',        '<Tp?r($t8NrzKbVKeR-@^@rge&iOlIJtfS?KJMNg;Q!PBhH69?J#R;YSb #FGz|K' );
define( 'SECURE_AUTH_SALT', '6kgKGXI1)%jizZfBpQX?.7W&Ubls dm[TQ: OJ1%J:&c+(}e@QM:d,OzLl3}R/o@' );
define( 'LOGGED_IN_SALT',   'v#*6oZ8S(AR&&%xb5Bdik~`h`.,G0pd|juyKWHNH;sL+z-tF_)FK$4,RilDa}6Wb' );
define( 'NONCE_SALT',       '+)>moTCz|Y]89D8hQjI!%c,d9gwo:{7-lNkW<4Vc|aPi^1zRb`D^2(Y8s%Hgvr{.' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ce1729ayl2601345_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
