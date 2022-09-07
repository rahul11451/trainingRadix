<?php
$path = $_SERVER['PHP_SELF'];
$array = explode("/", $path);
spl_autoload_register(function ($class_name) {
    include 'class/'.$class_name . '.php';
});
?>