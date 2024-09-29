<?php

namespace app\Models;

session_start();


use kernel\Model;
use kernel\Auth;
use kernel\Request;
use kernel\Connexion;
use app\Models\Users;




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

    

    public function estFavori(){
       
    /*    if (!isset($this->id) || !isset(Auth::user()->id)) {
            error_log("ID du vol ou de l'utilisateur manquant");
            return false;
        }
    */
  
        $query = 'SELECT COUNT(*) as nb FROM vol_user WHERE vol_id = :vol_id AND user_id = :user_id';
        $stmt = Connexion::executeExc($query, ['vol_id' => $this->id, 'user_id' => Auth::user()->id]);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC)[0]['nb'] > 0 ;
        
       
    
        
    
       // return $stmt->fetchAll(\PDO::FETCH_ASSOC); 

/*
    $query = 'select count(*) as nb from vol_user where vol_id=:vol_id and user_id=:user_id';
    $stmt = Connexion::execute($query,['vol_id'=>$this->id, 'user_id'=>Auth::user()->id]);
    return $stmt->fetchAll(\PDO::FETCH_ASSOC)[0]['nb']>0;
*/
    }

    public function toggleFavoris(){
       // if (isset($this->id) && isset(Auth::user()->id)) {
            if ($this->estFavori()) {
                // Supprimer des favoris
                $query = 'DELETE FROM vol_user WHERE vol_id = :vol_id AND user_id = :user_id';
                $stmt = Connexion::execute($query, ['vol_id' => $this->id, 'user_id' => Auth::user()->id]);
            } else {
                // Ajouter aux favoris
                $query = 'INSERT INTO vol_user(vol_id, user_id) VALUES (:vol_id, :user_id)';
                $stmt = Connexion::execute($query, ['vol_id' => $this->id, 'user_id' => Auth::user()->id]);
            }
       // } else {
       //     error_log("ID du vol ou de l'utilisateur est manquant");
        
/*
    if($this->estFavori()){
    $query ='delete from vol_user where vol_id=:vol_id and user_id=:user_id';
    $stmt = Connexion::execute($query,['vol_id'=>$this->id, 'user_id'=>Auth::user()->id]);
}else{
    $query ='insert into vol_user(vol_id,user_id) value(:vol_id, :user_id)';
    $stmt = Connexion::execute($query,['vol_id'=>$this->id, 'user_id'=>Auth::user()->id]);

}
*/
    }

    

/*
public function estFavori() {
    // Vérifier que l'utilisateur est authentifié et que l'ID du vol n'est pas nul
    if (isset($this->id) && isset(Auth::user()->id)) {
        $query = 'SELECT COUNT(*) AS nb FROM vol_user WHERE vol_id = :vol_id AND user_id = :user_id';
        $stmt = Connexion::execute($query, ['vol_id' => $this->id, 'user_id' => Auth::user()->id]);

        // S'assurer que $stmt n'est pas null avant de traiter les résultats
        if ($stmt) {
            return $stmt->fetchAll(\PDO::FETCH_ASSOC)[0]['nb'] > 0;
        }
    }

    // Retourner false si une des conditions échoue
    return false;
}

public function toggleFavoris() {
    // Vérifier si le vol et l'utilisateur existent et sont valides
    if (isset($this->id) && isset(Auth::user()->id)) {
        if ($this->estFavori()) {
            // Supprimer des favoris
            $query = 'DELETE FROM vol_user WHERE vol_id = :vol_id AND user_id = :user_id';
            $stmt = Connexion::execute($query, ['vol_id' => $this->id, 'user_id' => Auth::user()->id]);
        } else {
            // Ajouter aux favoris
            $query = 'INSERT INTO vol_user(vol_id, user_id) VALUES (:vol_id, :user_id)';
            $stmt = Connexion::execute($query, ['vol_id' => $this->id, 'user_id' => Auth::user()->id]);
        }
    }
}

*/
    
    
}