<?php


require 'vendor/autoload.php';
require 'config.php';


use classes\Router;
use app\Controllers\HomeController;

$homeController = new HomeController();
Router::get('/', function() use ($homeController) {
    header("Location:youtHub");
});



Router::get('/youtHub', function() use ($homeController) {
    $homeController->index();
});

Router::get('/getThumb', function() use ($homeController) {
    $homeController->index();
});


Router::post('/convert', function() use ($homeController) {
    $converType = $_POST['format'];
    $link = $_POST['url'];
    
    $homeController->convert($converType, $link);
});


Router::get('/banner', function() use ($homeController) {

    $homeController->banner();
});

Router::post('/downloadThumb', function() use ($homeController) {

    $link = $_POST['link'];
    $homeController->downloadThumb($link);
})
?>