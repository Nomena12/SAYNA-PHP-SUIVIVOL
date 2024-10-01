<?php

namespace kernel;

class Request{

    public static function get($key, $default=null){
        if (isset($_GET[$key])) {
            return htmlentities($_GET[$key]);
        }else {
            return $default;
        }

    }

    public static function post($key, $default=null){
        if (isset($_POST[$key])) {
            return htmlentities($_POST[$key]);
        }else {
            return $default;
        }

    }

    public static function all() {
        // Vérifie la méthode de requête HTTP (GET ou POST)
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Récupère toutes les valeurs envoyées via le formulaire en POST
            return $_POST;
        } elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
            // Récupère toutes les valeurs envoyées via l'URL en GET
            return $_GET;
        }
        
        // Retourne un tableau vide par défaut si aucune méthode ne correspond
        return [];
    }

    
}