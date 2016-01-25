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
define('AUTH_KEY',         ';S.?5mcP#.#!q]wglTFI$_PW|-K+L|RrOiLq<>)7kYt05EB/Ne#-)~B96pH`5:Ay');
define('SECURE_AUTH_KEY',  ' h5HKyLl+6#hl[H(cvyVv{|m)oUxRhf|l+j*N-IKp/~+c02Lj0Jy2Oq&:Q~*.MZ#');
define('LOGGED_IN_KEY',    '=^|=4]ta:$D;JhQE#a!sD2U!~TbsIPf<x2Q)K#{%W1i}G!(j66nvX~jy()8m#%;u');
define('NONCE_KEY',        '+S7(O6kX(2gG~n+u{U[J{M~^+a Z`^s}1&^5,{HdQS]wm-:AZiYsFK(BG-#@Yx20');
define('AUTH_SALT',        'LWkx5im=jRfsnAm9{A$c5ouYJ< oH{|E82bMmO==`kP#m5:]euTrwBS)&Y>)Y?>R');
define('SECURE_AUTH_SALT', 'F:gQpuUJw?u7VoakwFF!=);):.Sb5,QKT0NBhhI?-?f~``6AK|YZsM?(/0VLNC;)');
define('LOGGED_IN_SALT',   'B!oczIkSzT[vGH6eR<*3<lOj}ih[lTNq8hL!p%IszpY)mWSK`!6#M>pD .)iKqBe');
define('NONCE_SALT',       'hMEZgEN.v]hpU[YP[i|}?:r,TxmS4:/MnR*}yV&|z9JZ*C<W%.ljwCwwA<p)J-XD');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'dev4wp2_';

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