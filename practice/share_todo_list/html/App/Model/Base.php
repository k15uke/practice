<?php

namespace App\Model;

class Base
{
    private static $pdo;

    public static function getInstance()
    {
        if(!isset(self::$pdo)){
            self::$pdo = new \PDO(DSN,DB_USER,DB_PASS);
            self::$pdo->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
            self::$pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE,\PDO::FETCH_ASSOC);

        }
        return self::$pdo;
    }

    public static function begin()
    {
        self::$pdo->beginTransaction();
    }

    public static function commit()
    {
        self::$pdo->commit();
    }

    public static function rollback()
    {
        self::$pdo->rollback();
    }
}