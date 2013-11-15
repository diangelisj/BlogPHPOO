<?php

abstract class Conn {

    const USER = "root";
    CONST PASS = "";

    private static $instance = null;

    private static function connect() {


        try {
            if (self::$instance == null):
                $dsn="mysql:host=localhost;dbname=blogPHPOO";
                self::$instance = new PDO($dsn, self::USER, self::PASS);

            endif;
        } catch (PDOException $e) {

            echo "Aconteceu um erro :" . $e->getMessage();
        }
        return self::$instance;
    }

    protected static function getDB() {

        return self::connect();
    }

}
