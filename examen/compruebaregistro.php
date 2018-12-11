<?php

session_start();
$conn = new PDO('mysql:host=localhost;dbname=examen', 'silvia', 'silvia');

$user =trim($_POST["user"]);
$password = md5($_POST["password"]);





    $sql="SELECT COUNT(nombreUsuario) FROM usuarios WHERE nombreUsuario = '$user'";

    $stmt = $conn->query($sql);
    
    $res = $stmt->fetchColumn();  
    if ($res) {
        echo 'Existe';
        $_SESSION['user']='ERROR';
        header('registrarse.php');
    } else {
        echo 'No existe';
        $sql= "INSERT INTO usuarios (nombreUsuario,password)VALUES (?,?)";

        $statement = $conn->prepare($sql);

        $statement->bindParam(1, $user);
        $statement->bindParam(2, $password);


        $statement->execute();
        $_SESSION['user']='DONE';
        header('registrarse.php');

    }

