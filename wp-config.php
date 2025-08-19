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
define( 'DB_NAME', 'flux-created-studios' );

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
define( 'AUTH_KEY',         '3f;X[T5k^k^4RO$uGX9{%.-gyu8n,B&Q]B2^3 ;sdHo ^lVU:T&DZe#G8$<$Yngt' );
define( 'SECURE_AUTH_KEY',  '&~=tyhxS,Od~+Ix]eEOis!!mdZ>R.@v0MpUz,y-RXyNs=WpAzY7naR}5_z)>r1z`' );
define( 'LOGGED_IN_KEY',    'c5oxq2rKzn7PH_>&NB$Sp-MTD4f1}dB[yEpY_2];m)f@y>eN[ra>J[x`ydTBmFz`' );
define( 'NONCE_KEY',        'g.=s&T$<SLlV99:JBJji(?Gh,%e]& Et~X]gfD3+pbDI-%PI6* ]^S1fpQqV yph' );
define( 'AUTH_SALT',        'tk_gOa0]OgTrd`yo@Y?hRi$MwV|])9BIb3.UC^YyPOzbDMC49/:bEqCL]e|=BFdR' );
define( 'SECURE_AUTH_SALT', '$#|sr |54!2dJ0h{+oMB>~B4m:_({ Q[,)k[9Q&E>iU5Trs[6e]|cNe2FQ;oq1~W' );
define( 'LOGGED_IN_SALT',   'g$s;ijxhvy#^ZBV#]%=_-=`4!QWq  w8U*uDj >hPKA^Gg%P<ZoLH62WX3ocQ>O&' );
define( 'NONCE_SALT',       '7=&6^<V;m>;|HL([>y/3sJe>GrYdf2CIu{[c?yyc7_:HVo{OUa3($*Wh$Gg5_{LQ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
