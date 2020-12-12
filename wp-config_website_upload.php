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
define( 'DB_NAME', 'mybike' );

/** MySQL database username */
define( 'DB_USER', 'Morshed' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Mmsdmsd1234%' );

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
define( 'AUTH_KEY',         'Hxrj!+6148<FOC?JJ)43B@D&:R(s:!vJ:yPcC%ykJPBe9PKy%>Ci=H+mm!ieRmsD' );
define( 'SECURE_AUTH_KEY',  'Yt-ps<]?q7.)d4=MR&A B/.q&!y#ySp%wOkhhk9MeBC[o,/Mu}#)p8@rh{cyU+ev' );
define( 'LOGGED_IN_KEY',    '@HSz1j*y^t[c}^%h`irdalda#l^e/#2B!8v3P^zc63M56)K8z!<u-jQ+@[b^!(d^' );
define( 'NONCE_KEY',        '6oQ@aFlR!L25tPDUB>vn%WCHh{W_w/fZW-b|,%6ZzcqQ}8<*d$WY9p$7WlCH<lLU' );
define( 'AUTH_SALT',        '@VYi2=SLFi-bGlXNqiX,xTF) _9[$@hM-~^Lf$^30WI7L<l_7o8j{h@FXS_HC)rt' );
define( 'SECURE_AUTH_SALT', '/[Ogi}&4EL2QLM$,h^P;7f{LBFz{$pQ$vfSx799WZ^kr3q)bUV&x=xmx5!!4-Q@H' );
define( 'LOGGED_IN_SALT',   'Nm)[N_Xl6#bV>>&K0aZKB*9>1{Gr2kw,7>G||r8Hg>h[~dsubU5RacKBCV>E>0Om' );
define( 'NONCE_SALT',       '!n>QuC~IC&cw&fg6oJ_#}C0W4+Bx<E[ae=kvJFL7Wd_>6?51k6R$KmF0]pv)/R*6' );

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
