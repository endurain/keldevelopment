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
define( 'DB_NAME', 'w1nkelsc4r' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '1d(w@CC[Z3U}B7=iUFNPnw24%aQ%Yqr>!k+FCc,(EqO&aB eH>4Up&vwDCVsoX/|' );
define( 'SECURE_AUTH_KEY',  'LVm9]g]K/|NKEDq$cw4e%*{f@YjBdZQ?@Gjk`{Adm {1Zw81~g|BKlA%tke-:4vA' );
define( 'LOGGED_IN_KEY',    'X11}NYX^KSDcbc^9L(b<%aaNxcJU%nL-Hiu}5c-E1h5)NlSLnU Qf:=f(<P1aGU(' );
define( 'NONCE_KEY',        'h(yl=ElK3xe@q7%<=a?KIKMf2:eu[u-a/fIcD@Jjdloh~%VnXA4+V4|+;Ios2DqB' );
define( 'AUTH_SALT',        '9DNVE9>9WQ=2WQx4pGVL3#$vtJP3Isz4.0w=!$O{VNx{poeyUUqQgkD4><1:wPB~' );
define( 'SECURE_AUTH_SALT', '0?gM!>W 4&)y>F]djt2I>(S.&?bk31T~HZPJ8IYZYl}<7>,UCm6-Nmb|;R!q^.5n' );
define( 'LOGGED_IN_SALT',   ': WjV<7yTkF2=|@l4.Hhxu{sY!t2)!B%9dMX|E5%1g,;e&RycY5a?W;EtW4Mh@?6' );
define( 'NONCE_SALT',       'djXZ4Em1X=+`x>#U7 }Y59)m.sGO4ZzL;||=wFLC(1Hrvu}My?l*sdb)1Urbi;aq' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
