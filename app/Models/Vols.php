<?php

namespace app\Models;

use kernel\Model;

class Vols extends Model{

    protected static string $table = 'vols';

    public $numero;
    public $compagnie_id;
    public $aeroportDepart_id;
    public $aeroportArrivee_id;
    public $dateHeureDepartPrevue;
    public $dateHeureArriveePrevue;
    public $statut;
    public $porteEmbarquement;

    // Exemple de méthode store pour enregistrer les données
    public function store(){
        // Logique pour enregistrer dans la base de données
        // Cela peut impliquer une connexion à la base de données et une requête d'insertion
        $query = "INSERT INTO vols (numero, compagnie_id, aeroportDepart_id, aeroportArrivee_id, dateHeureDepartPrevue, dateHeureArriveePrevue, statut, porteEmbarquement) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        
        \kernel\Connexion::execute($query,[
            $this->numero,
            $this->compagnie_id,
            $this->aeroportDepart_id,
            $this->aeroportArrivee_id,
            $this->dateHeureDepartPrevue,
            $this->dateHeureArriveePrevue,
            $this->statut,
            $this->porteEmbarquement
        ]);
        


        // Exemple avec PDO
    /*    $stmt = $pdo->prepare($query);
        $stmt->execute([
            $this->numero,
            $this->compagnie_id,
            $this->aeroportDepart_id,
            $this->aeroportArrivee_id,
            $this->dateHeureDepartPrevue,
            $this->dateHeureArriveePrevue,
            $this->statut,
            $this->porteEmbarquement
        ]); */
    }
}