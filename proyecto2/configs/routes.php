<?php

return array(	
	"routes" => array(
		"/" => array(
			"route" => "/",
			"controller" => "index",
			"action" => "index"
		),

		"Historia" => array(
			"route" => "/historia",
			"controller" => "index",
			//"page" => "historia.php"
			"action" => "historia"
			),

		"Jugadores" => array(
				"route" => "/jugadores",
				//"controller" => "index",
				"page" => "jugadores.php"
			),

		"Jugador" => array(
				"route" => "/jugador/:idJugador",
				//"controller" => "jugador",
				"page" => "jugador.php"
			),

		"Login" => array(
				"route" => "/login",
				"page" => "login.php"
			),

		"Registrarse" => array(
				"route" => "/registrarse",
				"page" => "registrarse.php"
			),

		"compruebaLogin" => array(
				"route" => "/compruebaLogin",
				"page" => "compruebaLogin.php"
			),

		"logout" => array(
				"route" => "/logout",
				"page" => "logout.php"
			),

		"preferencias" => array(
				"route" => "/preferencias",
				"page" => "preferencias.php"
			),

		"cambiaAvatar" => array(
				"route" => "/cambiaAvatar",
				"page" => "cambiaAvatar.php"
			),

		"partidos" => array(
				"route" => "/partidos",
				"page" => "partidos.php"
			),

		),
	"error" => "error.php"
);

