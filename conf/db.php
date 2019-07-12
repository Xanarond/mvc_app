<?php

class DB
{

    const USER  = "vlad";
    const PASS  = "1";
    const HOST  = "localhost";
    const DB    = "mvc_app";

    public static function connToDB() {
        $user   = self::USER;
        $pass   = self::PASS;
        $host   = self::HOST;
        $db     = self::DB;
        $conn   = new PDO("mysql:dbname=$db;host=$host", $user, $pass);
        $conn->exec("SET NAMES 'utf8'");
        return $conn;
    }

}
