<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wpexom2i' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost:3306' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'n@G8GUm&kNP(k&J GO.v^taJ?PD.!^#[;=9NJBjGPG<0-;7J$5uuwZ@;FShzh#/t' );
define( 'SECURE_AUTH_KEY',  'Vn&Rt;WRaq!40Im}bA^U,0Bn^1?}z.jA3-5a7|;y~$j`w]YGR9_-*eb:gt/I73R|' );
define( 'LOGGED_IN_KEY',    ')-w?|I`/3Yb1=I|1)[M$ae}re26T%y-}V4Upa)aNi05W6HB=F~Ztf):P`DLCJVN0' );
define( 'NONCE_KEY',        '[)48FA{-5{ibIOY92%>Rr_bA&Y$|MhFLElUQ->>F*uMBnlR4aPB5S|xO~PS6W@=_' );
define( 'AUTH_SALT',        'QSTqGqdKZA`|_}?pZu`$U>TI21Y+&*:a?@pV$zPH.&xhd2|C-W*/{%d&|ry{uf;:' );
define( 'SECURE_AUTH_SALT', 'l//:_/`VfRCklPzi+RPznIJ&Gf1m=v(xlb[Ev?shg^mj^49,,tUtlKh4wM)xtXOO' );
define( 'LOGGED_IN_SALT',   '+4Ee>gu.JEe^7OnqKQ?Wm,~C/[^.6>@yT%aHbyy&4&J}vO]PrkC$#ca_/]+qEE`H' );
define( 'NONCE_SALT',       '6LYB8*QC{L6N|7Lp>CYI--n@%V9>$St2C+N1g]w$MdZJ6.Zh-[AQD5*Pj,D6_Q7v' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );

define('WPLANG', "fr_FR");
define('WP_LANG', "fr_FR");