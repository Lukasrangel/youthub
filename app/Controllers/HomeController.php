<?php

namespace app\Controllers;

use classes\Template;
use classes\Youtube;

class HomeController {


    public function index() {

      $page = new Template('index.php');
      $page->render();
      

      //$youtube = new Youtube('https://www.youtube.com/watch?v=EY9UOH64aZs');



    }

    
}

?>