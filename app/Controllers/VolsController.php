<?php

namespace app\Controllers;

use kernel\Request;

include('../kernel/Component.php');



class VolsController extends \kernel\Controller{
    public function index(){
        $vols = \app\Models\Vols::all();
        return new \kernel\View('vols/index.php',['vols'=>$vols]);
    }

   /* public function toggleFavori(){
        return new \kernel\View('vols/testVol.php');
      
    }
        */

        public function toggleFavori() {
            $id = Request::get('vols'); // Récupérer l'ID du vol
            $volModel = new \app\Models\Vols(); // Assurez-vous que votre modèle est instancié
            $volModel->toggleFavori($id); // Appeler la méthode pour mettre à jour l'état
            
            // Rediriger l'utilisateur après la mise à jour
            header('Location:.?controller=Vols&action=index');
        }
        
}