<?php
    include_once "./core/utils/globals.php";
    $globals = Globals::getInstance();
    $config = require_once "./configs/config.php";
    $globals->set("config", $config);

    include_once "./core/MVC/controller.php";
    $controller = new Controller();
    $controller->run();

