<?php


// Very basic router

include_once("custom_framework/Router.php");
$router = new Router();

$router->manageDestinationMission();


include_once($router->getRoute() . "index.php");



