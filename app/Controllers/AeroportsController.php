<?php

namespace app\Controllers;

class AeroportsController extends \kernel\Controller{
    public function index(){
        $aeroports = \app\Models\Aeroports::all();
        return new \kernel\View('aeroports/index.php',['aeroports'=>$aeroports]);
    }
}