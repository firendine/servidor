<?php

    include_once "./core/utils/globals.php";
    $config = require_once "./configs/config.php";
    //Llamar al método getInstance de la clase Globals
    $globals = core\Globals::getInstance();
    //Utilizar el método set de $globals para añadir $config ($key será "config")
    $globals->set("config",$config);
    include_once "./core/MVC/controller.php";
    //Crear un nuevo objeto de tipo Controller
    $controller = new Controller();
    //Llamar al método run del objeto creado anteriormente
    $controller->run();

