<?php

// Include du fichie contenant les routes
require "../Core/Router.php";

//INstanciation de la classe Route

$router= new Router();

//Ajout des controllers 

$router->add("{controller}/{action}");

$router->add("admin/{controller}/{action}");

$router->add("{controller}/{id:\d+}/{action}");

$router->dispatch($_SERVER["QUERY_STRING"]);