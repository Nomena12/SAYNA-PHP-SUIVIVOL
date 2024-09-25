<?php

namespace app\Controllers;

use app\Models\Pays;
use app\Models\Users;
use config\App;
use kernel\Auth;
use kernel\Request;


class AuthentifController extends \kernel\Controller{
    public function index(){
        $users = \app\Models\Users::all();
        return new \kernel\View('auth/index.php',['users'=>$users]);
    }

    public function login(){
        return new \kernel\View('auth/login.php');
    }

    public function verifLogin(){
        $password = sha1(App::KEY.$_POST['password']);
        Auth::verif(Request::post('email'),$password);
        if(null!=Auth::user()){
            header('Location:.?controller=Vols&action=index');

        }
    }

    public function logout(){
        session_destroy();
        header('location:.');
        
    }

    public function register(){
        return new \kernel\View('auth/register.php');
    }

    public function registerValid(){
        $user = Users::fromEmail(Request::post('email'));
        if (null==$user) {
            $user = new Users();
            $user->email = Request::post('email');
            $user->password = sha1(App::KEY.Request::post('password'));
            $user->store();
        }
        header('location:.?controller=Authentif&action=index');
    }



    
  /*  public function userChecked(){
        $users = \app\Models\Users::find(1);
        var_dump($users);
        var_dump($users->email);
        var_dump($users->password);

        var_dump($_POST['email']);
        var_dump($_POST['password']);

      //  if($users->email==$_POST['email']) && ($users->password==sha1($_POST['password'])){

      //  }

    }
    */
}