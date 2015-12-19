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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '@YkI<m2<n6QC`!MiTzXg1&a 4rc,z;q#|< ^z;jSjR%b1MUQv>XfF[!t PIB4igh');
define('SECURE_AUTH_KEY',  'MM5<plJ>bHN^^?~EMp>O 6V)#*rqmlN(?|/C4Rfh*KcOi7=nb}c]VsOmIY-SQN`x');
define('LOGGED_IN_KEY',    'PvA[%0:@[C+p3<;^^mmcXA(b]]=lv;X|a,EBV#V+9+B|6[<dkmkK#.+0FfMoTrG%');
define('NONCE_KEY',        'y ;~&#l/KMl4(}1+n*|HwI@+t.x+/PT?U]</kQ-W<`:j&b1-n:~gLkvE-?LCGMlM');
define('AUTH_SALT',        '+B0)}JM$K9 Uj2TE_0t>sZ(HGL)^SRI0%-2bH2oB%1e>PO2++|I|2=o 8GXm,ji[');
define('SECURE_AUTH_SALT', ')X2AOM!LP/5nHtS9dJ@?2GMjFo-d$bFlC>~>x2}8~HI0!SpzrUKvEf+.y_b3>6W?');
define('LOGGED_IN_SALT',   '<4;^OK)isz>E4~MX+#RKI%hrU7~%:Vkc!eD&*e6LZHgTQzdm0F%TL>hbupC80*d9');
define('NONCE_SALT',       'sfq[4cUhduK]WKPRZ7emz6G-+:F#sz`B{&ysBiH{yN/!_ryWG|IhN+hjdGG8~tX/');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 't_';

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
