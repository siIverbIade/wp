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
define( 'DB_NAME', 'wp' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '`JdJ{5:/p3J `^p2CmL<R5A}SRRPw)Eob,0{toDW}S`#)z7|#V{L)3- P= ;)VvL' );
define( 'SECURE_AUTH_KEY',  '~a.h!SQi!{P[v[>]AJLVX!H&x.7C1o3$=kmz)YC!7+=je0]1c34 !rz.|O?KFknz' );
define( 'LOGGED_IN_KEY',    'z{v@y2Un`4qo<yW6R);DWdqs*y;4+dP_J~R<S-vbR(H|l?2iK].EuL_dx0kTmn!E' );
define( 'NONCE_KEY',        'piY@E}Koh%9v:G(#p@:!b~efRTCV]p_>2L1}yZlT;rJV~6.p}6a;:y,BlCsxI1ud' );
define( 'AUTH_SALT',        'QF9ug{2X6O&Fm]O)9@j]u|}Lao>(J.Ef{ ?0mHiN]4Q$Z#4^QBK,n}&4u0gs(cx7' );
define( 'SECURE_AUTH_SALT', 'HYX{8[@QirB_p}[q!_xRN-%QgpOld#rkWmo#j6,-44gg|frzuq$+f`xOQ@_l1q@f' );
define( 'LOGGED_IN_SALT',   ';X4JltOy H5D{&dKvp/nR[Jr5Jb1Uj(9.av+[jt}+lL,3.f9jEEEmalJ*wMJCXEs' );
define( 'NONCE_SALT',       'jaG)]m$cz[6|(,bJbP?Li[mSq*[n9q#w1!>SF.5y)DS|Q;E?dTy~aK,0eOLzfZkK' );

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
