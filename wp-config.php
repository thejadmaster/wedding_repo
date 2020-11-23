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
define( 'DB_NAME', 'jeremy-and-brooke-wp-0bIzhKCa' );

/** MySQL database username */
define( 'DB_USER', '90eMy2oExdEj' );

/** MySQL database password */
define( 'DB_PASSWORD', 'tRtLZ6B8gLvGRmOm' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'te>VQOV3VZT) 4^~`P?/0ILvY8>ct2*aBTxpQCZP0Tug`TKPVB $u~q*c_KAV+A#' );
define( 'SECURE_AUTH_KEY',   'EzT2D *Ph#aj$j5zJY7yqOIGrbTN<r5pL^J^vExr>F%_!e;6=$ScjOj45866*E2g' );
define( 'LOGGED_IN_KEY',     'wn?S.KjKB#Z?6(q23QSQ99^O(>ni)^&X:zVQs.rGm(Iwf.Ap-^F*t?d#yk]~S|dF' );
define( 'NONCE_KEY',         '$yF&%[ywX{ g^^TdXw#SH Efgn;zJ+O7[N:BW ${_z98U]<)VkW>Y}3Wub+E,NsB' );
define( 'AUTH_SALT',         'HVn0#kNWCWQa4({z9jEyiM_1`[s&&S<|+qw<e`g/J^FTeyItsi|PkLw)T:wQ?Qyv' );
define( 'SECURE_AUTH_SALT',  'k|]&_OO#w/:6o-nkqMR.r[3$Ey^gjM;]^Bk*5&bG[,pGsTG|kZj:F!L4WNs^h]8Z' );
define( 'LOGGED_IN_SALT',    '$rqr.Y,%0 &Uz&k+M:TCO{5yb,6;6f3=Vzs$vzg$Nxg1L`ib`0Z_M#^I{H.K@W1 ' );
define( 'NONCE_SALT',        'R jjVDy$SfmLzn[8=!n3f6+g4X_[3B^?Yu;7;5o8RIzz{r$fUF9(^a$2AY(cCt?j' );
define( 'WP_CACHE_KEY_SALT', ';1VAw:G<S,:1C4y|P G=%&XWmeAT=!@qr;}XG%dryD,DLZLlR>4lvy.nmN9(Bly(' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_7d5ef76582_';


/* Change WP_MEMORY_LIMIT to increase the memory limit for public pages. */
define('WP_MEMORY_LIMIT', '256M');

/* Uncomment and change WP_MAX_MEMORY_LIMIT to increase the memory limit for admin pages. */
//define('WP_MAX_MEMORY_LIMIT', '256M');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
