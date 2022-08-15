<?php

namespace Laserd\Database;

use PDO;
use PDOException;

class Database
{
    private $db = DB_CONNECTION . ':host=' . DB_HOST . ';dbname=' . DB_NAME . '';
    private static $conn =
    DB_CONNECTION . ':host=' . DB_HOST . ';dbname=' . DB_NAME . '';


    public function __construct()
    {
        try {
            $dbh = new PDO(
                $this->db,
                DB_USER,
                DB_PASS
            );
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->connect = $dbh;
            $dbh = null;
        } catch (PDOException $e) {
            print "Error!: " . utf8_encode($e->getMessage())  . "<br/>";
            die();
        }
    }

    public static function testConnection()
    {
        try {
            $dbh = new PDO(
                self::$conn,
                DB_USER,
                DB_PASS
            );
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conexion exitosa";
            $dbh = null;
        } catch (PDOException $e) {
            print "Error!: " . utf8_encode($e->getMessage())  . "<br/>";
            die();
        }
    }

    public static function makeConnection()
    {
        try {
            $dbh = new PDO(
                self::$conn,
                DB_USER,
                DB_PASS
            );
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dbh;
        } catch (PDOException $e) {
            print "Error!: " . utf8_encode($e->getMessage())  . "<br/>";
            die();
        }
    }
}
