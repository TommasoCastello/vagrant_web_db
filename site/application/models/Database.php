<?php
class Database
{
    static private $_connection = null;
    static private $_user_connection = null;

    static public function getConnection()
    {
        if(!self::$_connection){
            $conn = new PDO("mysql:host=". DB_HOSTNAME .";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$_connection = $conn;
        }
        return self::$_connection;
    }
}