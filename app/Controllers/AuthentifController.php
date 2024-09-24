<?php

namespace app\Controllers;

class AuthentifController extends \kernel\Controller{
    public function index(){
        $users = \app\Models\Users::all();
        return new \kernel\View('authentif/index.php',['users'=>$users]);
    }
}