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
define('DB_NAME', 'alfamaj');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '?4CQfd,GR}{1}(Jq@6AZ;|Ld,p1_:/!<kXOi@w9DAo*|9NZJu^ (!xr;5L#Vnu5;');
define('SECURE_AUTH_KEY',  'Es.*uq5mU+o4aIl,Y2(enB9UYhDN@mIm+DY_|VE[i3 {KN&VV(S#&^TfH,7+$w`B');
define('LOGGED_IN_KEY',    'OJm2FgL&1<$?VIGb1B|i@H<JGu)@wI14qf|w|3a/+}a_fUU.VQ%l5xTvy9{%1pj<');
define('NONCE_KEY',        'Rc`_kJV<jq:S8X1q!(rHqfkL^l6|k<+&-{a/(.$.n/Gx,s#O_u`#Ao^0MXD@b6G_');
define('AUTH_SALT',        'tjKeA1?muUP@$||+]j[g%bbrJ|9#;3hA!NuNM@;kLfoox6pTM7/w%5t%PdB1>oz ');
define('SECURE_AUTH_SALT', 'e =g`o:=$wk]S#oq@8}k^zE@Pl)h4];&}9bqns;^M+w|wGrQT:x8W!P/ca/=bUyj');
define('LOGGED_IN_SALT',   '}4u5]gL5nMn(zxJ5-+Hd+D;Cm]FL}7%4z^29Wi-M:BBU8nXSZ.eZ+V*zd$7,V=-7');
define('NONCE_SALT',       '+Xp(L-xn@)+Am?._LUY/$]i%Ku7q<r{kTPT[x<dE1Ch-L}z*dYoIn1U#Ux5Q3>v]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'alfam_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
