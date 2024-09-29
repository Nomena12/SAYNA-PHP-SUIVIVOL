<?php

namespace kernel;

use app\Models\Users;

class Auth{
    public static function user(){
        return Users::find($_SESSION['user_id']??null);
    }

    public static function verif($email,$password){
        $query = 'select * from users where email=:email and password=:password';
        $users = Connexion::query($query,Users::class,['email'=>$email, 'password'=>$password]);

        if (isset($users[0])) {
           $_SESSION['user_id']= $users[0]->id;
           var_dump($users[0]->id);
        }

    }

}