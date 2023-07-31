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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'Planty' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '*@vMH2Rh^ 1lRR,8ij!%-WCkDqs&Ay$if2F9J}ilVmO<Hzv6U-(P gcWWU$JqPBd' );
define( 'SECURE_AUTH_KEY',  '=O<*s& [fi}Z5ZVz-AE?Y1rYjWDy^?~54i+s0^-ij21zcBPR!d:i|-R),^*Yvt(%' );
define( 'LOGGED_IN_KEY',    'kP~esZDe)cN9_F#XF3F0zP<,^,0JVf}B(00{fw;s!y&!?$a]0VG,Ls,HXs/@<os|' );
define( 'NONCE_KEY',        '^,$mnCa6Z s~,-.4_b5wU!hd`/n{?1L[H6zVSE=v^&U#To:R@rlods<^KSRcyH{Z' );
define( 'AUTH_SALT',        'HV0}B=%V)gne?>&p5F#0@:9IuD %A(oHPc_E:I${qq9a,54lOy47wphXg}p>|Mg;' );
define( 'SECURE_AUTH_SALT', 'H ~t6GM{:UDoz6`tT1@P}|=yn7Wjb.T0X41l$0:&ki.}v=_0uju(Z*t/wOK6W50~' );
define( 'LOGGED_IN_SALT',   'sIU,Dg`NH[+}1n?c#DQ>z]rHQ?N59Td(gM#^Tn*>  +ve9]jLz:6Gj$NH%Cp*#5x' );
define( 'NONCE_SALT',       '~:RXTL3]f42#%?_Wc~X/wj81Z`[XhE$(<`(%iwH{OW9v0$Ni8RAi3@DY-/f+Zsrb' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
