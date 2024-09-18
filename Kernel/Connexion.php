<?php


namespace Kernel;

use \Config\DB;

class Connexion {

    private static $pdo;

    private function __construct(){
        return;
    }

    public static function get(){
        if(!isset(self::$pdo)){
            try {

                // Création de l'objet PDO
                
                self::$pdo = new \PDO('mysql:host='.DB::HOST.';DB_name='.DB::NAME, DB::USERNAME, DB::PASSWORD);
                
                // Configuration des options de PDO
                
                self::$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
                
                // Vous êtes maintenant connecté à la base de données
                
                // ... Votre code pour exécuter des requêtes et effectuer des opérations sur la base de données ...
                
                } catch (\PDOException $e) {
                
                // En cas d'erreur de connexion, affichage du message d'erreur
                
                echo 'Erreur de connexion : ' . $e->getMessage();
                
                }
            
    }
    return self::$pdo;

}
}

