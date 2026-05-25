<?php



if (isset($_SERVER['HTTP_X_FORWARDED_HOST'])) {
    $protocolo = "https://";
    $host = $_SERVER['HTTP_X_FORWARDED_HOST'];
} else {
    $protocolo = "http://";
    $host = $_SERVER['HTTP_HOST'];
}


define("DIR", $protocolo . $host);


?>