<?php

class Database {

    private static function loadEnv() {
        $env = parse_ini_file(__DIR__ . '/../../.env');
        return $env;
    }

    public static function connect() {

        $env = self::loadEnv();

        return new PDO(
            "mysql:host={$env['DB_HOST']};dbname={$env['DB_NAME']};charset=utf8",
            $env['DB_USER'],
            $env['DB_PASS'],
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]
        );
    }
}