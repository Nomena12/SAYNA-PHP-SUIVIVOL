<?php

namespace app\Models;

use kernel\Model;

class Compagnies extends Model{

    protected static string $table = 'compagnies';

    private static $cache = [];

    public static function find($id){
        if(count(self::$cache)==0){
            $compagnies = self::all();
            foreach($compagnies as $compagnie){
                self::$cache[$compagnie->id] = $compagnie;
            }
        }
        return self::$cache[$id];
    }
}