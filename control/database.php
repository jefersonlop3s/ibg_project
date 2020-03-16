<?php
/**
 * Developer: Jeferson Lopes de Oliveira Mendes
 * User: Jeferson Lopes
 * Date: 2020/03/06
 */

/** Constantes de parâmetros para configuração da conexão */
class Conexao {

    /**
     * Atributo estático para instância do PDO
     */
    private static $pdo;

    /**
     * Escondendo o construtor da classe
     */
    private function __construct() {
        /** */
    }

    /**
     * Método estático para retornar uma conexão válida
     * Verifica se já existe uma instância da conexão, caso não, configura uma nova conexão
     */
    public static function getInstance() {
        if (!isset(self::$pdo)) {
            try {
                $opcoes = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES " . CHARSET . " ", PDO::ATTR_PERSISTENT => TRUE);
                self::$pdo = new PDO("mysql:host=" . DB_HOST . "; dbname=" . DB_NAME . "; ", DB_USER, DB_PASSWORD, $opcoes);
            } catch (PDOException $e) {
                print "Erro: " . $e->getMessage();
            }
        }
        return self::$pdo;
    }
}