<?php
define( 'WP_CACHE', true ) ;
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
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'wordpress' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'RteRScCtiB2zKvq1' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '&KQQAIV77c1y]/:4+c}eJTm~A.83`^fTFzZ}| h(SgPBaA&Y>a 0i.RotSWr.0>~');
define('SECURE_AUTH_KEY',  '%piM#7^h1OL*,/(fyUdU-8JhR9-?Z,:]pOE<sRcmd<P/>VDm46HMYw|.,CjugSPJ');
define('LOGGED_IN_KEY',    '5>w>O<8;v7gkGCh,0uCcDzV/<37o,n8/e-u[7#arU~/EpWToQ?6+OBF|z-KCTgh-');
define('NONCE_KEY',        'yegh>U,RpHR9$<$w3QQb;Xo~FvoLKCyxp}[~+|&wE%YVqUd&jvb^+|8t4(D~d:h[');
define('AUTH_SALT',        'P(-5Mb!<~DSmVY:Y}QfoeYo#)|Vh$:k-F0y46%UhG&;QD{eY!7Cmy+R*XK8ffC6f');
define('SECURE_AUTH_SALT', 'L{$Zy+^<fSY)%Jm?_{u>hFx88I+!4g^G>mD/B0tN:jUHSV$b7,hmzF`K3),<~.wX');
define('LOGGED_IN_SALT',   'A!ly3cnK9=leLW5x|0R+WnW8pUw-XOBSQu/%k!PFK?e5Cdl08VoMi]DSB7@V|EoP');
define('NONCE_SALT',       'AO,^r|B-i1:AKR[c-<&)2P_7$Qo5%MBj4>XjFY.co3Np9)W?S(eNId]|TG@~q|#J');

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
