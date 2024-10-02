<?php

namespace app\Models;

use kernel\Request;
use kernel\Model;

//include('../kernel/Component.php');


class Aeroports extends Model{

    protected static string $table = 'aeroports';

    private static $cache = [];

    public static function find($id){
        if(count(self::$cache)==0){
            $aeroports = self::all();
            foreach($aeroports as $aeroport){
                self::$cache[$aeroport->id] = $aeroport;
            }
        }
        return self::$cache[$id];
    }

    
    

    


}