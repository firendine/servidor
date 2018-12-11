<?php
session_start();
$user = trim($_POST["user"]);
$password = $_POST["password"];


$sql = "SELECT nombreUsuario FROM usuarios WHERE nombreUsuario ="+ $user +";";

echo $sql;
echo "<p>Hola</p>";

if($_SESSION["conn"]->exec($sql)>=1){
    echo "<p>El usuario ya existe</p>";

}else{
    $sql2= "INSERT INTO usuarios (nombreUsuario, password) VALUES ("+$user+","+$password+");";
    $_SESSION["conn"]->exec($sql2);
        echo "<p>El usuario puede registrarse";

}
