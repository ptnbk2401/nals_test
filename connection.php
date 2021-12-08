<?php
class DB
{
    private static $instance = NULl;
    public static function getInstance() {
        if (!isset(self::$instance)) {
            try {
                $dsn = 'mysql:dbname=nals_test;host=127.0.0.1';
                $user = 'root';
                $password = '';
                self::$instance = new PDO($dsn, $user, $password);
                self::$instance->exec("SET NAMES 'utf8'");
            } catch (PDOException $ex) {
                die($ex->getMessage());
            }
        }
        return self::$instance;
    }
}