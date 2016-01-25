<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'O><lWxtAVr7ANo!P:*+}9/YK~RGxuLVrRjh6|nWA%08KUB(EFPp!-@ 3Gk*v!1^|');
define('SECURE_AUTH_KEY',  ';SpL~>KRn,8O=1o9j)WqK3%gjpcYFGd1`~SDK.e;|A4e(cGr@^xrUI5}Te@2PHI^');
define('LOGGED_IN_KEY',    'Br-O!x~x+|vXKYa]8/].d8aW_.&&k)1yJJEXE|%X&*TGFacy+-+rxH}c<!dW7j-5');
define('NONCE_KEY',        '=hEb{-m},{7:${)*[u d[W]=y+%/cq+YXn)ShI?@Fv5e#^zU{>Hi|x(*1j>X]t*k');
define('AUTH_SALT',        'JJ{u_[UFT$3*2K`9!DAefg$~51fI,(*aZI*s=+](]W}P@$t4~(nh<FPwQS2|X1qJ');
define('SECURE_AUTH_SALT', '!{{)1!J5[+>Mc+ud>Xymt&NWrBx^qS$D<)lfs+Vz7pj1=]U+-X9%hvDUjlV^L/>t');
define('LOGGED_IN_SALT',   '&|)3Y5$_]([IeB1WQ-6=gU;L IPvaKi;Ug-MUC%o -hvd~fg}By9%;4ETdvWiC9R');
define('NONCE_SALT',       'BD%PseF=p8<<>8[Dq=l%$%LN;qA<-4I0PyNO_O(y}Sx4G}ewMU^V%Wt5P{j%cPuw');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp4dev_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');