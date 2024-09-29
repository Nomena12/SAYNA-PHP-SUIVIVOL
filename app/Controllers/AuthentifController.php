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

        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        if (Auth::user() === null) {
            // Si l'utilisateur n'est pas authentifié, rediriger vers la page de connexion
            header('Location: .?controller=Authentif&action=index');
            exit();
        }
        return new \kernel\View('auth/index.php',['users'=>$users]);
    }

    public function login(){
        return new \kernel\View('auth/login.php');
    }

   /* public function verifLogin(){
        $password = sha1(App::KEY.$_POST['password']);
        Auth::verif(Request::post('email'),$password);
        if(null!=Auth::user()){
            header('Location:.?controller=Vols&action=index');

        }
    }

    */

    public function verifLogin() {
        // Démarrer la session si elle n'est pas déjà démarrée
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    
        // Récupérer et hasher le mot de passe avec la clé de l'application
        $password = sha1(App::KEY . $_POST['password']);
    
        // Vérifier l'email et le mot de passe de l'utilisateur
        Auth::verif(Request::post('email'), $password);
    
        // Si l'utilisateur est authentifié, on stocke ses informations dans la session
        if (null != Auth::user()) {
            // Exemple : Stocker l'ID et l'email de l'utilisateur dans la session
            $_SESSION['user_id'] = Auth::user()->id;
            $_SESSION['user_email'] = Auth::user()->email;
    
            // Rediriger l'utilisateur vers la page des vols
            header('Location: .?controller=Vols&action=index');
            exit(); // Toujours utiliser exit() après une redirection pour éviter que le script continue de s'exécuter
        } else {
            // Optionnel : Gérer le cas où la connexion échoue
            // Rediriger vers la page de connexion avec un message d'erreur
            header('Location: .?controller=Auth&action=login&error=invalid_credentials');
            exit();
        }
    }
    

    public function logout(){
        session_destroy();
        header('location:.?controller=Authentif&action=index');
        
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