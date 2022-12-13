<?php

class Database {

    /**
     * Retourne une instance de PDO
     * @return PDO
     */
    public static function getPDO(): PDO {
        try {
            $connectionDatabase = new PDO('mysql:host='.DB_HOST.' ;dbname='.DB_NAME.' ;charset= utf8 ,'.DB_USER, DB_PASS);
            return $connectionDatabase;
        } catch (PDOException $ex) {
            die('Erreur : ' . $ex->getMessage());
        }
    }
}