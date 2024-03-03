<?php 

//print_r($_SERVER['PATH_INFO'] );
print_r($_SERVER);

/*     require("include.php");

$url = trim($_SERVER["PATH_INFO"], "/");
$url = explode("/", $url);
$route = array("accueil", "contact");
print_r($url);

$action = $url[0];

//controller
if (!in_array($action, $route)) {
    # code...
    echo 'error';
}else{
    //echo 'Bienvenue dans l\'action '.$action;
    $function = "display".ucwords($action)."()";
} */