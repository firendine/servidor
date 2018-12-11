<?php
session_start();
/*
$conn = new PDO("mysql:host=localhost;dbname=nba", "silvia", "silvia");
$conn->exec("set names utf8");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
*/
try {
    $conn = new PDO("mysql:host=localhost;dbname=nba", "silvia", "silvia");
    $conn->exec("set names utf8");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "ESTOY AQUIIII";
} catch (PDOException $e) {
    echo "<p>Error: Cannot connect to database server.</p>\n";
    echo $e;
    exit();
}


//print_r($_SESSION);
function compruebaLogin(){
    $conn = new PDO("mysql:host=localhost;dbname=nba", "silvia", "silvia");
   
    if(isset($_COOKIE["sesionIniciada"]) ){
        $_SESSION['logged']=true;

        $usuario = explode(";", $_COOKIE["sesionIniciada"]);

        $_SESSION["user"] = $usuario[0];

            $sql="SELECT id,avatar FROM usuarios WHERE nombre = '$usuario[0]'";

            foreach($conn->query($sql) as $row){
                $id= $row['id'];
                $extension= $row['avatar'];
            }
        
        $_SESSION['avatar'] = "avatar".$id.".".$extension;

        

    } else{
        $_SESSION['logged']=false;
        $_SESSION['avatar']=NULL;
        $_SESSION['user']=NULL;
        //$_SESSION['password']=NULL;
    }
}

compruebaLogin();
print_r($_SESSION);


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
    


//echo "Estamos en el index.php \nuri:" . $uri . "\n page:" . $page . "\n matchesParams:" .$matchesParams ."\n keys:". $keys;


