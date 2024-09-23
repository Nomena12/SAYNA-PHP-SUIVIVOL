<?php

namespace app\Controllers;

class VolsController extends \kernel\Controller{
    public function index(){
        $vols = \app\Models\Vols::all();
        return new \kernel\View('vols/index.php',['vols'=>$vols]);
    }
}