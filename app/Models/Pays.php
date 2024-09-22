<?php

namespace app\Models;

use kernel\Model;

class Pays extends Model{

        protected static string $table = 'pays';

        public function save(){
                $query = 'update pays set name=:name where id=:id' ;
                \kernel\Connexion::execute($query,['name'=>$this->name,'id'=>$this->id]);
        }

    /*    public function suppr(){
                $query = 'delete from pays where id=:id';
                \kernel\Connexion::execute($query,['id'=>$this->id]);

        }
    */
}