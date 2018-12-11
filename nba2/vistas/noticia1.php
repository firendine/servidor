<?php
/*
include "menu.php";
$key = $keys[0][0];
//$idNoticia = $params[$key];
$idNoticia = 1;


    $sql="SELECT * FROM noticias WHERE id= 1";
    //$statement = $conn->query($sql);

        foreach($conn->query($sql) as $row){ 
            $idNoticia = $row['id'];
            echo "<h1>".$row['titulo']."</h1>";
            echo "<p>".$row['cuerpo']."</p>";
            echo "</br></br></br></br>";
        }


        $comentario= strip_tags($_POST['comentario']);
        $usuario= $_SESSION['user'];
*/
        
/*
        $sql_numUsuario= "SELECT id FROM usuarios WHERE nombre LIKE '?'";
        $statement_numUser= $conn->prepare($sql_numUsuario);
        
        if($statement_numUser->execute(array($usuario))){
            while($fila == $statement_numUser->fetch()){
               $holabuenas = $fila;
            }
        }
    */
        /*
        if($statement_numUser->execute(array($usuario))){
           // while($fila = $sentencia->(fetch))
           echo "<p>yup</p>";
            foreach($statement_numUser->fetch() as $row){
                print_r($row);
                echo "<p>aaaaaaaaaaaaaaaaaaaaaaaaaa</p>";
            }
        }
        
*/
        
/*        
        $sql_insert= "INSERT INTO comentarios (idNoticia,idUsuario,comentario) VALUES (?,?,?)";
        
        $stt = $conn->prepare($sql_insert);
        
                $stt->bindParam(1, $idNoticia);
                $stt->bindParam(2, 1); //TIENE QUE ALMACENAR EL NÚMERO, NO EL NOMBRE, PARDALA
                $stt->bindParam(3, '"'.$comentario.'"');
        
                $stt->execute();
                //$stt->close();
*/

 /*       
    $sql_comment="SELECT * FROM comentarios WHERE idNoticia= 1";

        echo "<h3>Comentarios</h3>";     
        foreach($conn->query($sql_comment) as $fila){

            echo "<h5>".$fila['idUsuario']."</h5>";
            echo "<p>".$fila['comentario']."</p>";
            echo "<adress>".$fila['fecha']."</adress>";
            echo "</br></br></br></br>";
        }
*/      
        
?>
        
        <!DOCTYPE html>
        <html lang="en">
        <head>
        <link rel="stylesheet" href="../css/noticias.css">
            <meta charset="UTF-8">
            <title>Noticias</title>
        </head>
        <body>
            <h1>Noticias</h1>
        <form action="1" id="comment" method ="post">
        <textarea name="comentario" form="comment">Enter text here...</textarea>
        <input type="submit">
        </form>
        <br/>
        </body>
        </html>
        