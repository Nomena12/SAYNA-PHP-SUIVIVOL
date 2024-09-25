<?php

namespace kernel;

class Request{

    public static function get($key, $default=null){
        if (isset($_GET[$key])) {
            return htmlentities($_GET[$key]);
        }else {
            return $default;
        }

    }

    public static function post($key, $default=null){
        if (isset($_POST[$key])) {
            return htmlentities($_POST[$key]);
        }else {
            return $default;
        }

    }
}