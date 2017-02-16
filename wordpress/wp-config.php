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
define('DB_NAME', 'startwordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
 define('AUTH_KEY',         '>zb7r+Qq:.rthR<`DSjy--@S&C-9<:_#A+<[*?EC}FN^x~K>![<b,|m,={_AFB:>');
 define('SECURE_AUTH_KEY',  'X|aL}S[&>W9N;yo9+j+EM$Svo-X.t:~/)m,RjVnx,g6LpQO]J5/!}UB%e6@&G:kI');
 define('LOGGED_IN_KEY',    'F=1F7->POEdHCW^jd((`vvq|z_(PcW2IhLbuVx!{4lr(3y->`aAb`=<Y^NeNgP-L');
 define('NONCE_KEY',        'Tc.+Tj_qbxSwU#sk3pemhK&p|E4NX:!82g0!S$jqwVwnixPej 1zdHbLpv`p`A0P');
 define('AUTH_SALT',        '#.M@(JES$l[A.qw+<%`Dbn18Dm3ov:qnnv>;e!y2~BWep!^CvWA)kGA$X-3=gtUY');
 define('SECURE_AUTH_SALT', 'S;UTb8J|Nm<+WZ+nF$cv(T*LK:2mQsDe1SikO=iBfTYTtyyMBG(S]!l-73nq_<U)');
 define('LOGGED_IN_SALT',   'g2sN#B0QZTvi]Gpnt-y8D%#JvN2i)pyq`kIv|oT0/HdTrY_2r{]#1&,M]b_gq.up');
 define('NONCE_SALT',       'm(vc(?m3_mpc3H`v5fgsF|u$6mgD~WmSw+W_fQyLnOPYki9-(#+6x=I_nd !1Qgj');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'xyz77_';

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
