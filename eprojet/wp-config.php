<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'eprojet');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '_WJ5x}xrl,NDNuJb +tjFh96a~Y]V5{8hf-e;2KS$Ixd+w|w$:dJ7tZxLGvy}9[L');
define('SECURE_AUTH_KEY',  'j}FA) mm1MZ-.~3**#mx|4@=7bXi7;F21iWBz#$@,$+:K;-SL<8My!~}]JUw5f7/');
define('LOGGED_IN_KEY',    '+isA`R-l{]=YreHGuKK7E[?#zW-#IfoOXV(yeF/jh^VjSYe1{l0N1wE8;/-}1)s5');
define('NONCE_KEY',        'V^m2SnHsWJISS&p%fm%HX+Z2GC-gplJdBH!lq.plpeqK@,Q(2R/KHzAVg%P;81n@');
define('AUTH_SALT',        'Z%[@7++<w[WfA_[E!?+;< L=}dz@#lLx8g::;}nl7dD6<l<B<SxV7IhhEVCh=.CM');
define('SECURE_AUTH_SALT', ' 2}iXE6jJ#n;@,6QJ?Z8o|J7o:]Pb|.Nzp5ClcBjt5tHrjpVjNwI,t`@H< t*zqH');
define('LOGGED_IN_SALT',   '+C/2K8E,GE+G~/tso_/e~?52OKg<=bKu:GmU5t%q&B-R(fQK&?/3Mk[gfGb9&Q&}');
define('NONCE_SALT',       'b5-%1{gz)A3M|ihRbKw]|@qp{1hQ*rcTw6Dq9bn5tQ+.2GJnKL2fn(Dx)_a0G<zh');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');