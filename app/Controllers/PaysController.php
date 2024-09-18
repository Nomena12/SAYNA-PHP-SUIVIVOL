<?php

namespace app\Controllers;

class PaysController extends \kernel\Controller{
    public function index(){
        $pays = \app\Models\Pays::all();
        return new \kernel\View('pays/index.php',['pays'=>$pays]);
    }
}