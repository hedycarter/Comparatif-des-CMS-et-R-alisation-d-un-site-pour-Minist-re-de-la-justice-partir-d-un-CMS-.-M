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
define( 'DB_NAME', 'ministere' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '~BO%7CPL|Wl(m>V>#n<Pd^{`Lue4g]<O[K##wV(#MKuH|frG=JR-g{{7R?v*~0@|' );
define( 'SECURE_AUTH_KEY',  'Vu,c3:@>l&coQ{W(Skn2yzWeh{y;x :-u]$10#?BlHMF63>CXPvaa;U7%y(D,>)&' );
define( 'LOGGED_IN_KEY',    'KY;i%DS6>=TN^dt/1HR#Rj-[*++>.kh{dZqlzhiRDC/6Wv2pv{ YDQ)2CZ=eo-ss' );
define( 'NONCE_KEY',        '=NA!HN e+bEJ%-Rwk0pylg8VM{e:)DJ(,u6N^9viRW_beSXr/0FK%9w/W=r97Tm%' );
define( 'AUTH_SALT',        'Ka5DFo[~tIKx@wJ33CY27o.&u(k~ /FLI=rWt.q<P;T(L#DT@j+2]SxrzY7Z/-}N' );
define( 'SECURE_AUTH_SALT', '*FlWx0]onG0-Zaeo=e_H |Ba$;A:e9tz*mn<>]P$(,nspM7.I`2caUFV!=d>;1=0' );
define( 'LOGGED_IN_SALT',   '(_[zp<>+de^<b@kT=8~ajP9V6X{%:undAR;lRtt!8SR501=a.k`&~JI@5a6Rml;|' );
define( 'NONCE_SALT',       'x/99CKKm0x;xlj%4JJRUo)j!0w$-GCq]{dZv DvD6P~qHkJ?TD4)EFy`_7+l)teC' );
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
