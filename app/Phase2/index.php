<?php

require __DIR__ . '/../../vendor/autoload.php';

array_shift($argv);

$class = "App\\Phase2\\Controllers\\" . array_shift($argv);
$method = array_shift($argv);
$params = $argv;

$controller = new $class();
echo $controller->$method(...$params);