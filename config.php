<?php
/**
 * Autor: Jeferson Lopes de Oliveira Mendes
 * User: Jeferson Lopes
 * Date: 2020/03/06
 */

/** Codificação de caracteres */
define('CHARSET', 'utf8mb4');
/** O nome do banco de dados*/
define('DB_NAME', 'ibgdata');
/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');
/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'surviv0rs');
/** nome do host do MySQL - endereço IP ou Hostaname */
define('DB_HOST', '172.17.0.2');
/** caminho absoluto para a pasta do sistema **/
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** caminho no server para o sistema **/
if ( !defined('BASEURL') )
    define('BASEURL', '../');

/** caminho do arquivo de banco de dados **/
if ( !defined('DBAPI') )
    define('DBAPI', ABSPATH . '/control/database.php');

/** caminhos dos templates de header e footer **/
define('HEADER_TEMPLATE', ABSPATH . '/view/header.php');
define('INDEX_TEMPLATE', ABSPATH . '/view/index_template.php');
define('FOOTER_TEMPLATE', ABSPATH . '/view/footer.php');

/** App */
define('LOGIN', ABSPATH . 'control/login.php');
define('A_MEMBERS', ABSPATH . 'control/a_members.php');
define('A_CHURCHS', ABSPATH . 'control/a_churchs.php');



/** Cadastros */
define('C_MEMBERS', ABSPATH . 'view/c_members.php');
define('C_CHURCHS', ABSPATH . 'view/c_churchs.php');

/** Consultas e relatórios  */
define('R_MEMBERS', ABSPATH . 'view/r_members.php');
define('R_CHURCHS', ABSPATH . 'view/r_churchs.php');

/** Alterações */
