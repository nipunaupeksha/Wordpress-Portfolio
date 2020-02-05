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
define( 'DB_NAME', 'wordpress_portfolio_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '~h%FQ+:@yq]jy?pUe{)@==k3!!NVzXem^eU&W^##.+x*>xG%^DKN_zW,Y?vic>P7' );
define( 'SECURE_AUTH_KEY',  '^7?v=;fbqj:@crG_H,B}EeTk]2oKc5b~w#<Zz-aUkNu6OlBe2Titc/bS_@,oK!=(' );
define( 'LOGGED_IN_KEY',    '4$PT[dbsE3^-!8>j|MZ+0u/>Vvto[{^k2@9Um;[dT$e{BbhVi 2d<rr1Q@!&hlm_' );
define( 'NONCE_KEY',        'nv,.BaT,$7~vi3vJpY5<eh0%V<NF<bQ*<iA:T7X=7(BAS(4 q7l_RQ@&N-OOwRT>' );
define( 'AUTH_SALT',        'qU$(GmE5n*;hxWi#~N,+!:V6U;&%3*#|{11kTD1PfR+;sD9`TSH!O)9$UNAds! N' );
define( 'SECURE_AUTH_SALT', 'U%tOQ_KU5_N[i=9G#wMtpj]*;Ai6$oVri,+&.$tTtE0N.c ]#u409^lmy1,Kf2KD' );
define( 'LOGGED_IN_SALT',   'I^IR~oXub>i2:}T)%GOWj9x*z};y_&lXP|.p7I_|.oLmPO#u^:,|XRAkH})YX>kW' );
define( 'NONCE_SALT',       'XEN#asC<ZFKJ#[|C&Q7;.@6lwB3JKZ]>*rAxb}[w)1(%6PaX/5C0@iOU~QOsEJA,' );

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
