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
define('DB_NAME', 'wmassage');

/** MySQL database username */
define('DB_USER', 'wmassage_admin02');

/** MySQL database password */
define('DB_PASSWORD', 'newuser1!');

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
define('AUTH_KEY',         'Mu(&q|pX];=C:q^E%w>z5YAsneIthh !vzh$e&LISGM[I:#@r*!fttsTPsV{i+F6');
define('SECURE_AUTH_KEY',  'm dO!F3OR`C9Q {26J`qB[Px^e4{`/5@kStCIvVA%s&Vjb!I6M4YdV05NjLojMeq');
define('LOGGED_IN_KEY',    '9}@1MOVC{OGJk%iPY3~&.I?v{zX|E15`kpPGR1}w D^Mt<~>M[t^7fPCMK#8y>No');
define('NONCE_KEY',        'dWvu*Ig8iFMx=xYW6XxzBmj%Yw6 hb:?I~?aJaT-we]d{,?)vaX6j.S(e^{dxA<!');
define('AUTH_SALT',        'Oa/IIuh1D6-qm6=&BBYh0N#]|/*s4Tev3rhyVb|myt;/KL]astNQTZ=k21sNR*{H');
define('SECURE_AUTH_SALT', 'YJ{flW%Wkl Ut-[P;yfDf&-NwkEI_fMpP:T+sc&CSdX{_mg=-%oxBb3q&n(Q2@lb');
define('LOGGED_IN_SALT',   'YS4mfr9OB)/Xp^qU@>}%7*B^L/UB^{k8Ugg}!#D#eyH>PVwm c,SixFr+|Mf%41@');
define('NONCE_SALT',       '~.g@/@}OvSa#WQ(.G@Ta#^;(l6?ZApHHW[8cWUGSVr<}UEyt+:d>t7}xJCrXUpIJ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
