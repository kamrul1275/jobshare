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
define( 'DB_NAME', 'project' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '{mk# AEpj6DhdTZjzQ0ZY/S/kc/Y3c3Fv} OHA6X2Z>l%@BC}fF,GELd6k0K>wn%' );
define( 'SECURE_AUTH_KEY',  'M*KKY?);7<b%ND=gwqmY{r? p2uVq`{(9`Geg.MFQ4-jG^y58x8`35J] U} |/>[' );
define( 'LOGGED_IN_KEY',    '7#gvm~doZSI7;_`4n -U<2,2Nh/_jt4<v<K*{$L`x,$c[ BJ<@wwOn&T*9UT%&+t' );
define( 'NONCE_KEY',        'r,QOoC*/vGH<YG<p+M!]2AxkU <`6CkEsp((zYSPZpZ=zuSZ[ylV`*7(-U2qHLpr' );
define( 'AUTH_SALT',        '|)|yz?AXJD(lUn%imG]ym U66U?r!6D<_}9k 3xZff!)7N2@6tKUMD3O*.R2r!rT' );
define( 'SECURE_AUTH_SALT', '0sU=5Byd$5ePN|R}qMf,vkh*q(kse;R6-KQ+MtFtF*wVkiPo%3_uSVw[-f7v`VQv' );
define( 'LOGGED_IN_SALT',   'q5$wu{=uVJ$<~n^Qcz]({5%F0:^ff]G*SFkaPt}-O3uFx@7b+VO yOhmfM|]`+FH' );
define( 'NONCE_SALT',       '&omP2)Q(8wEo9z&ur0~KDNq,N7/504 bA_lm<Ayw=a!>X}|?UKB|.*KRGL~Ac.Dc' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
