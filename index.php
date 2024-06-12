<?php

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$segments = explode('/', $path);

$controller = $segments[1];
$action = $segments[2];
// todo: both action and controller: undefined array key if nothing passed

require "src/controllers/$controller.php";
$controller_object = new $controller;
$controller_object->$action();
