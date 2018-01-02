<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'mobyloja');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'mobyloja');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'monitor1420');

/** Nome do host do MySQL */
define('DB_HOST', '179.188.16.161');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'qcn!lY=YtZX[p1YHP%n2Wm^j4g^4x;)D5S!|<~C~!K,XTR)cmC7jybx5c[cq@N,m');
define('SECURE_AUTH_KEY',  'DX!(o4{dN^)P2ce!5XEtzfkthh^Mx9cl-=^M`XYNObLLBwSFf@j;f,N^h!+UYP~K');
define('LOGGED_IN_KEY',    'uNyZ2d#@K78wIx&c`EE.x#CT:VSG:l@(x}(}KA6M%_8?4O:K/x L`}*jajrQ>il>');
define('NONCE_KEY',        'ZBV1rRS0ob/<&JN_whv$/M/<@y+un5Z.@{d@}u% UreM6^]@Rj@N4s=%KUs1$z+Y');
define('AUTH_SALT',        'u4m.G6A0=#wX~}=:j.Nt>f)Z4I~L?UES!;UQ9H/w{Jot=,hZlpV_^h5=Ea[K|_{/');
define('SECURE_AUTH_SALT', 'Y`5b.Tv${bHJwG%,apr~-QV`6H4])gVZ4cKp>qILuk7Vw@. bN5lP;U/[By+s<L,');
define('LOGGED_IN_SALT',   ';Scl2b!f7mpfrV+]-Cl~5&I[BW6P:n zAy |nZ:VqMM:m<hOhG.[qe`BSR+VC#}4');
define('NONCE_SALT',       'g}U7|ZjN[(VV_$@Ey*Q@Kkxz_S(~J;;>aszLIqk* K#V*iqxgJGV6*_IKmZAhSW$');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
