<?php


require 'vendor/autoload.php';

define("DIR",$_SERVER['DOCUMENT_ROOT']);

use classes\Router;
use app\Controllers\HomeController;
echo DIR;

$homeController = new HomeController();
Router::get('/', function() use ($homeController) {
    $homeController->index();
})

?>