<?php
include "menu.php";

$comentario=  $_POST['comentario'];
$usuario= $_SESSION['user'];


    $sql="SELECT * FROM noticias";
    
        
        foreach($conn->query($sql) as $row){
            $idNoticia = $row['id'];
            echo "<h1>".$row['titulo']."</h1>";
            echo "<p>".$row['cuerpo']."</p>";
            echo "</br></br></br></br>";
        }


        $sql_numUsuario= "SELECT id FROM usuarios WHERE nombre LIKE ?";
        $statement_numUser= $conn->prepare($sql_numUsuario);
        
        if($statement_numUser->execute(array($usuario))){
            while($num = $statement_numUser->fetch()){
               $numeroId= $num['id'];
               
            }
        }
         
    echo "<h3>Comentarios</h3>"; 
    $sql_comment="SELECT * FROM comentarios /*WHERE idNoticia= 1*/";    
        foreach($conn->query($sql_comment) as $fila){

            echo "<h5>".$fila['idUsuario']."</h5>";
            echo "<p>".$fila['comentario']."</p>";
            echo "<adress>".$fila['fecha']."</adress>";
            echo "</br></br></br></br>";
        }



    if($_SESSION['logged']==true){
        echo '<form action="/noticias" id="comment" method ="post">
                <textarea form="comment" name="comentario"></textarea>
                <input type="submit">
              </form>';
    }



$sql_insert= 'INSERT INTO comentarios(idNoticia,idUsuario,comentario,fecha,id) VALUES (1,7,?,DEFAULT,DEFAULT)';

$st = $conn->prepare($sql_insert);

         $st->bindParam(1, 1);
         $st->bindParam(2, $numeroId);
         $st->bindParam(1, $comentario);

        $st->execute();
        $st->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../css/noticias.css">
    <meta charset="UTF-8">
    <title>Noticias</title>
</head>
<body>
</body>
</html>
