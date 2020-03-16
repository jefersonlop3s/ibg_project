<?php
/**
 * Autor: Jeferson Lopes de Oliveira Mendes
 * User: Jeferson Lopes
 * Date: 2020/03/06
 */
?>
<?php
require_once('config.php');
require_once(DBAPI);
include_once(LOGIN);
$pdo = Conexao::getInstance();
?>
<?php include(HEADER_TEMPLATE); ?>

<?php include(LOGIN); ?>

<?php include(FOOTER_TEMPLATE); ?>
