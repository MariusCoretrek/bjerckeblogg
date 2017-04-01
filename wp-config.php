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
define('DB_NAME', 'bjerckemedia_no_victoria');

/** MySQL database username */
define('DB_USER', 'bjerckemedia_no_victoria');

/** MySQL database password */
define('DB_PASSWORD', 'passordpassord');

/** MySQL hostname */
define('DB_HOST', 'bjerckemedia.no.mysql');

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
define('AUTH_KEY',         '+*wq{~I:G^el:v3QP~q{vOuoaaS54Q@wz>cmBK+-)$c)`WJZ?e3)(~4>wjE]uj4|');
define('SECURE_AUTH_KEY',  '|j@v@c{>bP{I6:0MZ~pCv[w%uH(FVMGJi(/ylCwq]<d1jh!:tv,6x?<{xg0a4I85');
define('LOGGED_IN_KEY',    '3`}:XQRYyF^9<So,B#KA|w-sbhg%ChoE d~^l@0f[QAM8?6mDkZ!5.bb&;rl%5RW');
define('NONCE_KEY',        'B3~r< =8}Gm*CGEC.=r3:%bxufHZPH<&;kUEv2CD4QhO.-vvl 4R3L|eq@F4z;yw');
define('AUTH_SALT',        '_yvDuLwFg<UaO75)8^62p?CUai[h%R/}[2{#m80HSvJaih?g3O[(4)~-]{*>o&jk');
define('SECURE_AUTH_SALT', 'uRx8;s:B*6{GX@c4T]*~4^}u [GLK/aV%RhFkdm|<tOwq<5D?xVofh2~yq~;DHM0');
define('LOGGED_IN_SALT',   'Am&Tgz/N}]:}2><shb{N`X#UGMOy|-_gCL%r${mpunmvXVsA0xL/+Co_HHMmKycY');
define('NONCE_SALT',       'Q oLu>~5rq$v 27G])RlLI.SH(AtHNWm08TPr:sRM6a@KsNY-UJpz7*!ySlJ#]pe');

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
