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
define('DB_NAME', 'particuliers-securiter_db');

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
define('AUTH_KEY',         'Y#7a(*pNsJ3b$?i&nvb@%~571lX^_Y+t;z+[rI_.&SQ [D}lMI<C*o+@`Hk-&e2}');
define('SECURE_AUTH_KEY',  '-|R1<?,~+e8Kc1MjN|,?-S)`)r,{2i^7}9k+vGfnIwL)p@[;]zAR*Q4<4s#(|BHp');
define('LOGGED_IN_KEY',    'Y@>a&S,cO_];IFUyc|4ZxSpXzXJ R&Y5UmvBR3zO$hi/8CA<g1K)P?Ysp(uqwmNV');
define('NONCE_KEY',        'GqGw{~s[U2hULz$;AQF,ox`y{I &w;pRUp$MBTiQ_p`|-%Bg&58UPG-b<Af.$,[F');
define('AUTH_SALT',        'G$yEn*tBq>hkHn1SqTfWz`,y^2@r@WWRku4`<hChx-)d*4Le@@;nqh|rN30yeeh_');
define('SECURE_AUTH_SALT', 'cRwp:zEVQOf&Y%K]1iO(&FO_Xx(S8b$5#Dd{2kH&SrF$tiI2.1;9G[Og.[o]ewjN');
define('LOGGED_IN_SALT',   'yv6T+=uCzV>kb[nXX`iO&i/PTMv EjH:,Jm<H&x6Sh|[{V%_)e/(WSea*MMPQau,');
define('NONCE_SALT',       'y=12|x9u8aGVAZnAt+f!P:wz>$61qL _J~+1|WMV#9D*7uQ+u-Jw;4Ns<|*QgVcp');
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