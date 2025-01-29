<?php


require 'vendor/autoload.php';
require 'config.php';


use classes\Router;
use app\Controllers\HomeController;


$homeController = new HomeController();
Router::get('/youtHub', function() use ($homeController) {
    $homeController->index();
});

Router::get('/getThumb', function() use ($homeController) {
    $homeController->index();
})

?>