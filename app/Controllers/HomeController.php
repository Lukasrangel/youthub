<?php

namespace app\Controllers;

use classes\Template;
use classes\Youtube;

class HomeController {


    public function index() {

      $page = new Template('index.php');
      $page->render();
      
    }

    public function convert($converType, $url){

      $youtHub = new Youtube();

      $youtHub->setUrl($url);


      if($converType == 'mp3') {
        $youtHub->mp3();
      }

      if($converType == 'mp4') {
        $youtHub->mp4();
      }
    }

    
}

?>