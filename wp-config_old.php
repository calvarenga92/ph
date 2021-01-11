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
define( 'AUTH_KEY',         'h hDPhF;jd}-e[s;wBz]ns#i!B)8jzJXl n=o`ebaC&[W{jg$m+(b%T{,tzdk>-g' );
define( 'SECURE_AUTH_KEY',  'v@d_YsOdG()Z^Vhk&OHO`jyP=r.Z|0g[FiZ)`Vd2IcP]0JV#&}F&E;}NyJ}A#W$r' );
define( 'LOGGED_IN_KEY',    'ia?[M7X_Yb$X4&gXX2Y2z%]b|RGOF#sk;:yS0mY&Cy:uE$`;m%S.gJLOup3#gnK6' );
define( 'NONCE_KEY',        ': *]`Riq.S*!fay+jL &.P2c!G&>Z[1?LU=GP-}NQ<y3OuPn] >Oc3pu0!Gmf,b{' );
define( 'AUTH_SALT',        '{33g&S)i8uQUd`SighG}S(IxitGsLhc4*^Sj5x3#G7CZl<~C_Hw&M*+-vw)H#t.7' );
define( 'SECURE_AUTH_SALT', '55|rHM#Y3Zaw/2RP?o2i@qt& `,ux:Oy;+z% `JRb#{(3HTUY:at|ASh^Sve[rM7' );
define( 'LOGGED_IN_SALT',   ';H$3R`Tl?=a*]$b2IFUkx#,qt(V/H4bJygvD}7SXmonG@)O89?gtBwgQ5:x)eUGz' );
define( 'NONCE_SALT',       'Hzqa~^p]j]_?/IQk_  qIqpsLHc[VkT4ESmNb LJh _NSo$VD%WGm%?NU`7&bRc^' );

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

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
