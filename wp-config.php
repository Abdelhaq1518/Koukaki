<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'koukou' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         '% zJ[b]EQ0|+Xm.wVZsGsaa,#yewADezfa,,5W4s_]TfBL0U(~>Z;ER~.Uc,_,Yw' );
define( 'SECURE_AUTH_KEY',  'gX2wtU6.]r{YOny=G6!CjBtGi5*g^?_MroDR4>*zMjA#q]+Xm[Ap#f 0R^#*s;YP' );
define( 'LOGGED_IN_KEY',    '~hya`Y&V(r4ah.9J9j.E!KYgyE:za6WpOY{8$<7Ck4&QCzG2r4)fx;L#{{0/i{Zv' );
define( 'NONCE_KEY',        '#qR1VS*<f7bt13(CLC%vpi7T1L(Y0urXCZ*a9;--H]s+zKGXjfkiFlFmhgO`pJcN' );
define( 'AUTH_SALT',        'Q]6c]><:C3hY^ 9{<<9[jsHlNdi,78hz4ldCIg_EKKeQinQ$LfuBBEA)vgF~V!5O' );
define( 'SECURE_AUTH_SALT', 'VoliI;SRi-mL7O4)[3{|DPh%y%0u`fBnrUgo~,o!L_;2GOLn hKjrxv(o]RknZnA' );
define( 'LOGGED_IN_SALT',   'lyd6ZRJGQ(?|[P+`KxvB0a!ic`HN^oVmOTQIjjSZvisg1NupN0&FN9{{mpxao]~e' );
define( 'NONCE_SALT',       'X9]ph}0^|.ES}=#z.kaQMVvuAad9u{kK@*6Ac.|Oz,zsXMY6%ec1Fb3W<0segz,J' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
