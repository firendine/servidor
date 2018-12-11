<?php
session_start();

$logged = false;
$userName = null;

try {
    $conn = new PDO("mysql:dbname=nba;host=localhost", "silvia", "silvia");
    $conn->exec("set names utf8");
    $_SESSION["conn"]= $conn;

} catch (PDOException $e) {
    echo "<p>Error: Cannot connect to database server.</p>\n";
    echo $e;
    unset($_SESSION["conn"]);
    exit();
}

function compruebaLogin(){
    if (isset($_COOKIE["sesionIniciada"])) {
        $usuario = explode(";", $_COOKIE["sesionIniciada"]);
        $_SESSION["id"] = $usuario[0];
        $_SESSION["extensionAvatar"] = $usuario[1];
        $_SESSION["logged"] = true;
    } else {
        unset($_SESSION["usuario"]);
        unset($_SESSION["avatar"]);
        $_SESSION["logged"] = false;
    }
}

/*
print_r($_SESSION);
function compruebaLogin(){
    if(isset($_COOKIE["sesionIniciada"])){
        $_SESSION['user']= $_POST['user'];
        $_SESSION['password']= $_POST['password'];
        
        
    } else{
        $_SESSION['avatar']=NULL;
        $_SESSION['user']=NULL;
        $_SESSION['password']=NULL;
    }
}
*/

compruebaLogin();
>>>>>>> 1er commit


include "config.php";
$routes = include "routes.php";
$page = null;

$uri = trim($_SERVER["REQUEST_URI"], "/");


//buscar la ruta del array $routes
foreach($routes["routes"] as $currentRoute){
    $route = trim($currentRoute["route"], "/");
    $routerPattern= "#^" . preg_replace('/\\\:[a-zA-Z0-9\_\-]+/', '([a-zA-Z0-9\-\_]+)',  preg_quote($route)) . "$#D";
    $matchesParams= array();

    
     if(preg_match_all($routerPattern, $uri, $matchesParams)){
        //var_dump($matchesParams);

        $keys = array();
        $params = array();
        
        array_shift($matchesParams); //elimina el primer elemento

        preg_match_all('/\\:([a-zA-Z0-9\_\-]+)/', $route, $keys); //recoge las key

        array_shift($keys); //elimina el primer elemento

        for($i=0; $i<count($keys[0]); $i++){
            $params[$keys[0][$i]] = $matchesParams[$i][0];//asigna los valores a las key
        }
        $page = $currentRoute["page"];
    }
}



if($page == null){
    $page= $routes["error"];    
}
include_once(VISTAS . $page);
    

<<<<<<< HEAD

=======
>>>>>>> 1er commit
//echo "Estamos en el index.php \nuri:" . $uri . "\n page:" . $page . "\n matchesParams:" .$matchesParams ."\n keys:". $keys;


