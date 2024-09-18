<?php

namespace kernel;

class View{
    private string $filename;
    private $params = array();


    public function __construct($filename,$params=[]){
        $this->filename = $filename;
        $this->params = $params;

    }

    public function display(){
        include('../app/Views/'.$this->filename);
    }
}