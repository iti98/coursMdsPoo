<?php

require_once('autoload.php');

$controller = new Controler\Controler;

// echo "<pre>"; var_dump($controller) ;echo "</pre>";
$controller->handleRequest();

