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
define( 'DB_NAME', 'ibl' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'EezJYWzvdXOXR}Ulp3L>T2BO@d>wXii6;RuTTPt*Jz1g|Gi MonkAXg~5-V}MJ#6' );
define( 'SECURE_AUTH_KEY',  'V9GPA.r5TtdEhLz4%Ag[F^LkCg[Zj#YHTDJ0CAemH)e.6u2f57$4{{A^#wtbKBm/' );
define( 'LOGGED_IN_KEY',    'ed%*C cyf3tr+1CZ+e&=4Wic6:OztDook}D+(cs|s|1=q1nRFY|%FF%i2{);Y>7d' );
define( 'NONCE_KEY',        ']F=CU6(&vV|JR_(5^r.SuJ23m;44B)<{y=X:np7d{?LDQ~xo%wYWrHn;SzGqt`Gw' );
define( 'AUTH_SALT',        '&DDI<t[|B>pnKQtlP8G3>;ULi@HRJ!HeLfM&5F:pqLaAQcig3YY,t kA+PFxtYNS' );
define( 'SECURE_AUTH_SALT', 'g[h0qve;uN|jqu(LqCk{H_R%,T)c#<vT~.ae!;n~aXzI:}K!D%w3I4F.+[dQ-!Y@' );
define( 'LOGGED_IN_SALT',   '[%mn=(Ci^&4<bQD-%^t5I5;vH lymA0>w-CpiL#U|a3(3r9KAcJ&Uho78#h*aJ$o' );
define( 'NONCE_SALT',       'd`ea&kb~.|$j>s9p>G5IaQ[/B1I]gDk]{isQE})%-V|zBXZ6m2n,s>,,,!EJIOz6' );

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
