<?php 
include 'config/config.php';
include 'app/class/Router.php';
include 'app/Controller.php';

$Router = new Router;
$Router->load("/perros", "carga_memes", "mostrar");



?>
