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
define( 'DB_NAME', 'cv-123' );

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
define( 'AUTH_KEY',         'yu;}lm6xy+Os!IYX^ib[uKkEGSoegbsoE8AdtESc6RpiHX+axB;k@%QSfg_Zf3ds' );
define( 'SECURE_AUTH_KEY',  'A n`IG!5awzIBZ7x]Bh;`NC~r2XIkel<9#-)?D+JlPwm 0>fxv42T*i*7Qr;Gc.}' );
define( 'LOGGED_IN_KEY',    'kTnfW>5Dz[N*RqD`f=p)_[Yu]v@c?<l!f=UdteyqMWMV(:AhSHipdMD+ =bPRY=_' );
define( 'NONCE_KEY',        'c_81:UM))*$V&V(SjU$=X>[XmzImlQ_ZKKXWLzU]RFu!H*z-tOS)/sH?~ekynU-v' );
define( 'AUTH_SALT',        'hDDt,x4,t1=r;%R$^M.CR~L~RtO7Dm=t<Q%i*x6BD+4i]f->rPQ-<PcmlM}!-VV1' );
define( 'SECURE_AUTH_SALT', 'pUJFp.P>O|L?[7L&[<*._#aqD^Kmrg+Ui=Vmm2k;}F/C`t`p^KI/BR*G0F9@3h=[' );
define( 'LOGGED_IN_SALT',   'LR3zjGwV};2mG-l?M)U[;oKoX`Z%vn#[K:vA5X*ZxQ@EcPAHMY.Wfb)X@4|Kt<|S' );
define( 'NONCE_SALT',       ',?_0GjxeRiBXkT2J#:|UD)P-l93!)=evh2Ur.+=z<w}<81|2T:{Y8[ *F]1ClwTJ' );

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
