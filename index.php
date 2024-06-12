<?php


$action = $_GET['action'];
$controller = $_GET['controller'];
// todo: both action and controller: undefined array key if nothing passed

require "src/controllers/$controller.php";
$controller_object = new $controller;
$controller_object->$action();
