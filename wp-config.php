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
define( 'DB_NAME', 'virginie_wordpress' );

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
define( 'AUTH_KEY',         'v,<bP@m7>u1>*0yk^)!7E/~IvrBt@3=qmJDjRS ]8>uZ+s7e1)qYE(4m? 7{0[6n' );
define( 'SECURE_AUTH_KEY',  '^ceNEiboOcKM9WQ7<=aKb@(kF7>o~@ XEp@B9BwPYZgJIeU(dn LS+NP.8<@PbWT' );
define( 'LOGGED_IN_KEY',    'mG`a(NIv;hOwoY8uFwVjyrnR{:gbL!Mbe!<!;led%!mQeYtW}$|oCKe[dTa#WA1p' );
define( 'NONCE_KEY',        'aweFY<u}F>/@&FV2]uQ2R^m_yCcm1hhK|tdQ!^0:ZT#>tJ4Rn>9bDVy.W&HI6o<n' );
define( 'AUTH_SALT',        'Q mxDRcX_9jS8{t-Aot18H99xM5`E|.9bsuc&d|sM5DWi)y{E&1lQ&uR_JvpGqoN' );
define( 'SECURE_AUTH_SALT', 'bm2V,KKLV$iW?GUFpyyf6ZDpu:Og+yf$OwkB1t_k<x_H$1[)M*@(9JItZdW>~y-q' );
define( 'LOGGED_IN_SALT',   ']^<@F2ut|6_d)3*$7]VO886!X6%1VZm?7OJ4jr9_<F~=?+Xx)bQw6[~ImZL}:#?J' );
define( 'NONCE_SALT',       '9>o$D[,Uc*WSKoYk-GiR^^yg-bkD96sb4:()EVKNEIh @LHBIHhWAIuCz/2+i-Sm' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'virginie_';

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
