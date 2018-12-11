<?php

//session_start();

include_once "config.php";

$user = htmlspecialcharts(trim($_POST["user"]));
$password = md5($_POST["password"]);

//try{
//$conn = new PDO('mysql:host=localhost;dbname=nba', 'silvia', 'silvia');
   // echo "conectado :)";

    $sql="SELECT COUNT(nombre) FROM usuarios WHERE nombre = '$user'";

    $stmt = $conn->query($sql);
    
    $res = $stmt->fetchColumn();  
    if ($res) {
        echo 'Existe';
        $_SESSION['user']='ERROR';
        header('Location:' . ROOT . DT . 'signup');
    } else {
        echo 'No existe';
        $sql= "INSERT INTO usuarios (nombre,password)VALUES (?,?)";

        $statement = $conn->prepare($sql);

        $statement->bindParam(1, $user);
        $statement->bindParam(2, $password);


        $statement->execute();
        $_SESSION['user']='DONE';
        header('Location:' . ROOT . DT . 'signup');

    }

//}catch(Exception $ex){
   // echo"No conectado";
//








