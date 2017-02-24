<?php
//metodo meno sicuro
//$controller = $_GET['controller'];
$controller = filter_input(INPUT_GET,'controller',FILTER_SANITIZE_STRING);
if(empty($controller)){
   $controller = 'home';
};

include "./controller/$controller.php";