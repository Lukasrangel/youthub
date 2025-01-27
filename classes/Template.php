<?php

namespace classes;

class Template {

    private $file;
    
    private $param;
    
    public function __construct($file){
        $this->file = $file;
    }
    
    public function setParam($arr){
        $this->param = $arr;
    }
    
    public function render(){
        include('app/Template/' . $this->file);
    }
    
    
}


?>