<?php

namespace app\Controllers;

use kernel\Request;
use kernel\Model;


include('kernel/Component.php');



class VolsController extends \kernel\Controller{
    public function index(){
        $vols = \app\Models\Vols::all();
        $compagnies = \app\Models\Compagnies::all();
        $aeroports = \app\Models\Aeroports::all();

     return new \kernel\View('vols/index.php',['vols'=>$vols,'compagnies'=>$compagnies,'aeroports'=>$aeroports]);
    }

  

        public function toggleFavori() {
            $id = Request::get('vols'); // Récupérer l'ID du vol
            $volModel = new \app\Models\Vols(); // Assurez-vous que votre modèle est instancié
            $volModel->toggleFavori($id); // Appeler la méthode pour mettre à jour l'état


            $vol = \app\Models\Vols::find(Request::get('vols'));
            $vol->toggleFavoris();
            
            // Rediriger l'utilisateur après la mise à jour
           // header('Location:.?controller=Vols&action=index');
        header('Location:' . $_SERVER['HTTP_REFERER']);

        }

    /*   public function tri(){
        $vols = \app\Models\Vols::all();
        $compagnies = \app\Models\Compagnies::all();
        $aeroports = \app\Models\Aeroports::all();

     return new \kernel\View('vols/testVol.php',['vols'=>$vols,'compagnies'=>$compagnies,'aeroports'=>$aeroports]);
    }
*/
    public function search(){
        $vols = \app\Models\Vols::search(\kernel\Request::all());
        $compagnies = \app\Models\Compagnies::all();
        $aeroports = \app\Models\Aeroports::all();
        return new \kernel\View('vols/index.php',['vols'=>$vols,'titre'=>'recherche de vols','compagnies'=>$compagnies,'aeroports'=>$aeroports]);
    }
   
       }


        
        
