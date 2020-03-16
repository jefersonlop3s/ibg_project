<?php
/**
 * Autor: Jeferson Lopes de Oliveira Mendes
 * User: Jeferson Lopes
 * Date: 2020/03/10
 */

require_once('config.php');
require_once(DBAPI);
include_once(LOGIN); 
include(HEADER_TEMPLATE);
$pdo = Conexao::getInstance(); ?>




<?php include(FOOTER_TEMPLATE); ?>