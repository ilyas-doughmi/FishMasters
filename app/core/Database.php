<?php

class Database
{
    private static $instance = null;


    private function __construct() {}

    public static function getInstance()
    {
        if (self::$instance === null) {
            $host = 'dockhosting.dev';
            $db   = 'app';
            $user = 'admin';
            $pass = 'f6d9cb9d4a70f97b8167b77f';
            $port = 42576;

            $dsn = "pgsql:host=$host;port=$port;dbname=$db";

            self::$instance = new PDO($dsn, $user, $pass, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
                PDO::ATTR_EMULATE_PREPARES => false,
            ]);
        }

        return self::$instance;
    }
}