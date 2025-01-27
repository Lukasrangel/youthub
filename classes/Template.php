<?php

namespace classes;

class Template {

    private $header;
    private $file;
    private $footer;
    
    private $param;
    
    public function __construct($file, $header = '../app/Views/header.php', $footer = '../app/Views/footer.php'){
        $this->header = $header;
        $this->file = $file;
        $this->footer = $footer;
    }
    
    public function setParam($arr){
        $this->param = $arr;
    }
    
    public function render(){
        include($this->header);
        include('../app/Views/' . $this->file);
        include($this->footer);
    }
    
    
}


?>