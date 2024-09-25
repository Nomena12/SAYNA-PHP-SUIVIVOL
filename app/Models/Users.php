<?php

namespace app\Models;

use kernel\Connexion;
use kernel\Model;

class Users extends Model{

    protected static string $table = 'users';

    public static function fromEmail($email){
        $query ='select * from users where email=:email';
        return Connexion::query($query, Users::class, ['email'=>$email])[0] ?? null ;
        
    }

    public  function store(){
        $query ='insert into users(email,password) value(:email, :password)';
        return Connexion::execute($query, ['email'=>$this->email,'password'=>$this->password]) ;
        
    }


}