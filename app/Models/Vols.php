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
        
    }


    public function toggleFavori($id) {
        // Récupérer le vol par son ID
        $vol = $this->find($id); // Assurez-vous que cette méthode existe pour trouver un vol par ID
        
        // Déterminer le nouvel état du favori
        $nouveauLabel = ($vol->favori == '<i class="far fa-star"></i>') ? '<i class="fas fa-star"></i>' : '<i class="far fa-star"></i>';
    
        // Mettre à jour le champ 'favori' dans la base de données
        $query = "UPDATE vols SET favori = ? WHERE id = ?";
        \kernel\Connexion::execute($query, [$nouveauLabel, $id]);
    }
    
}