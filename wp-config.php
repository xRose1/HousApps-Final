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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'sbedx4' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Ireggae46' );

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
define( 'AUTH_KEY',         'aaJqGMK= oS$.+tgfcNAFA+d<+A|Mvp42P4w|#I,Xq^ywdZ]vrfU?fVgDZ8Fps}e' );
define( 'SECURE_AUTH_KEY',  'Zzm,)IB9v$1-AvC>5BLq;A1Oz;eV)q?{1`7cTlmmb6gh,!.:E$YRbpoo0/jK 0F-' );
define( 'LOGGED_IN_KEY',    'MsB[Jyv8HJQy5jbVY_?]=2)Dn)kex}mK!JxTDMs;]cs=&->&ke_5w()dS:9Z:pwj' );
define( 'NONCE_KEY',        '6[-edc&XTWYF<#u|(!mE`2lsL9~F%  =U!bA0H-9/s$p`-PsZL,bCMOm7mVE%c6,' );
define( 'AUTH_SALT',        'ZpL_~Ua~e_7s2O&#_Ztn(4u`X*Tmpv$*? a8yVr[M#x&q1[!G?Gk<on7xxp+OfZQ' );
define( 'SECURE_AUTH_SALT', 'Bj5FmW]no,l 7  =aa! d`I=xwMWR1<$CGn{3DHNCIRnEH%[X9n$YEL>_jObd,fJ' );
define( 'LOGGED_IN_SALT',   'XyX/V]GK-o`FKO5l<h3KA_BDuN3eSx(>h;iC#(;xq/yQ7Wt%iyWz:y#qOoh/hu|)' );
define( 'NONCE_SALT',       'i?!V<R9m>_utP5x^lsoIW=c5X#myBiBeJUgAGgGUQ#]E{aM!o@uJC#1jK:KKNq]Q' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
