<?php

return array(
   

    "routes" => array(
        "/" => array(
            "route" => "/",
            "page" => "inicio.php"
        ),
        
        "Inicio" => array(
            "route" => "/inicio",
            "page" => "inicio.php"
        ),

        "Historia" => array(
            "route" => "/historia",
            "page" => "historia.php"
        ),
        "Jugadores" => array(
            "route" => "/jugadores",
            "page" => "jugadores.php"
        ),
        "Jugador" => array(
            "route" => "/jugador/:idjugador",
            "page" => "jugador.php"
        ),
        "Login" => array(
            "route" => "/login",
            "page" => "login.php"
        ),
        "Preferencias" => array(
            "route" => "/preferencias",
            "page" => "preferencias.php"
        ),
        "SignUp" => array(
            "route" => "/signup",
            "page" => "signup.php"
        ),
        "Partidos" => array(
            "route" => "/partidos",
            "page" => "partidos.php"
        ),
        "Noticias" => array(
            "route" => "/noticias",
            "page" => "noticias.php"
        ),
        "Noticia" => array(
            "route" => "/noticia/:idnoticia",
            "page" => "noticia.php"
        )
    ),
    "error" => "error.php"
);

// echo "Estamos en routes.php";