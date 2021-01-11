<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'xpasset_etfs' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'xpass_etfs' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '@07ciKh5' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'robb0516.publiccloud.com.br:3306' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '/:TaY{QC2iFHa,vh(lCS,/l&r*__[BD&h.?dp1W5ST|z,a[O0,SrQW<VWe@U;rf=' );
define( 'SECURE_AUTH_KEY',  'HoPzB9#A+w1IlP#b4z:VY;iaJGyciJp!nnZS 1AZ*SF9HyBX8jIzaMJ]FT!429bG' );
define( 'LOGGED_IN_KEY',    '9 `@8jM]k3a-gbkjL:9sO]>re9 o=RF-n>&P<lfM 9p02!3~BLcrAI$K,^:3-DN9' );
define( 'NONCE_KEY',        'PU?t;zC3dSYCA.]mPn[$w<SMARopyE1v,tNS+?Ht{pDi8hp:V<VA0%/5|5} JVZq' );
define( 'AUTH_SALT',        '1pblLR-tUUNYi3|1.YU,!q:]}Cr.AG,{A>Nt5!]O5dgQL&b{FPEfCG-|Fk*7>!I<' );
define( 'SECURE_AUTH_SALT', 'jE?`.7p^3UU5Qe*_P9K=3KV+sLiG*.9YpK-2sj@yh1j@jqcRO}>P][@AX 9rOr63' );
define( 'LOGGED_IN_SALT',   'm/2ah(es._nO|;#&14Zwpb. fn_9.zXRhAK%EKeBcB%!luf%/Q12gLp=%1&QJ7%D' );
define( 'NONCE_SALT',       'jJH(5QYNJd&S7e2:NhV[;|;#Hj>Z[5DL%K~wzm%5|:61p0W9$yWlg4EBY7Tglsb@' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */
/* Multisite */
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/etfs/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
