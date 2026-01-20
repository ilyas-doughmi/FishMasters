<?php

class Database
{
    private static $instance = null;

    private function __construct() {}

    public static function getInstance(): PDO
    {
        if (self::$instance === null) {
            $host = 'dockhosting.dev';
            $db   = 'app';
            $user = 'admin';
            $pass = 'fc33f7c834f13fa10656ab8e';
            $port = 46132;

            $dsn = "pgsql:host=$host;port=$port;dbname=$db";

            self::$instance = new PDO($dsn, $user, $pass, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ]);
        }

        return self::$instance;
    }
}
