<?php

namespace app\Controllers;

use classes\Youtube;

class HomeController {


    public function index() {

      echo "index";

      $youtube = new Youtube('https://www.youtube.com/watch?v=EY9UOH64aZs');



    }

    
}

?>