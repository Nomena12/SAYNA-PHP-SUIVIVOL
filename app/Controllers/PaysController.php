<?php

namespace app\Controllers;

class PaysController extends \kernel\Controller{
    public function index(){
        $pays = \app\Models\Pays::all();
        return new \kernel\View('pays/index.php',['pays'=>$pays]);
    }

    public function edit(){
       
        $pays = \app\Models\Pays::find($_GET['pays']);
        return new \kernel\View('pays/form.php',['pays'=>$pays]);
        
       
    }

    public function update(){
        $pays = \app\Models\Pays::find($_POST['pays']);
        $pays->name=$_POST['name'];
        $pays->save();
        header('Location:.?controller=Pays&action=index');

    }

    public function delete(){
        $pays = \app\Models\Pays::find($_GET['pays']);
        return new \kernel\View('pays/confirmDelete.php',['pays'=>$pays]);
       
    }

    public function deleteConfirm(){
        $pays = \app\Models\Pays::find($_POST['pays']);
        $pays->delete();
        
        header('Location:.?controller=Pays&action=index');

    }


        
}