<?php
    include 'menu.php';
    include '../config.php';

<<<<<<< HEAD
 echo $archivo;
=======

   //imagen nueva


   if (isset($_POST['subir'])) { 

    $oldArchivo="../" . AVATAR . $_SESSION['avatar'];
    $archivo = $_FILES['newImg']['name'];
    $ruta = $_FILES['newImg']['tmp_name']; //Recogemos el archivo enviado por el formulario
    move_uploaded_file($ruta, $oldArchivo);
    //$archivo = $_FILES['newImg']['name'];


   if (isset($archivo) && $archivo != "") { //Si el archivo contiene algo y es diferente de vacio
 
       //Obtenemos algunos datos necesarios sobre el archivo
       $tipo = $_FILES['newImg']['type'];
 
       //Se comprueba si el archivo a cargar es correcto observando su extensión
         if(!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")))) {
             
            unset($_FILES['newImg']);
 
             echo "<script type='text/javascript'>window.confirm('No es un archivo de imagen.');</script>";
     
         } else{
            
            echo $oldArchivo;
            unlink($oldArchivo);

            copy($ruta, $oldArchivo);
            rename($archivo, $_SESSION['avatar']);
             $_SESSION['avatar']=$archivo;
             //header('Location:' . ROOT . DT . 'preferencias');


         }
       
        
    }
}
 echo $ruta;
 echo $archivo;





>>>>>>> 1er commit
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Preferencias</title>
</head>
<body>
<br/><br/><br/>
    <h1>Preferencias de cuenta</h1>

    
<<<<<<< HEAD
<?php

        if (isset($_POST['subir'])) { 
       
            $archivo = $_FILES['newImg']['name']; //Recogemos el archivo enviado por el formulario
            $archivoName = $_FILES['newImg']['tmp_name'];
            $extension = end(explode(".", $archivo));

            if (isset($archivo) && $archivo != "" && is_uploaded_file($archivoName)==true){
     
                $tipo = $_FILES['newImg']['type'];
 
                if(($extension == 'jpg' || $extension == 'jpeg' || $extension == 'png' || $extension == 'gif')&&
                    (exif_imagetype($archivoName)== IMAGETYPE_PNG || exif_imagetype($archivoName)== IMAGETYPE_JPEG ||exif_imagetype($archivoName)== IMAGETYPE_GIF)){

                

                    $user=$_SESSION['user'];

                    $sql = "UPDATE usuarios SET avatar = '$extension' WHERE nombre = ?";

                    $statement = $conn->prepare($sql);
                    $statement->bindParam(1, $user);
                     $statement->execute();


                     $arrayImagen = explode(".", $_SESSION['avatar']); //convierte en array
                     $nombreImagenSinExtension = array_shift($arrayImagen); //elimina el ultimo elemento del array(la extensión) y lo convierte en string 
                     $cambioNombre = AVATAR . $nombreImagenSinExtension .".". $extension;


                    if(file_exists(AVATAR . $_SESSION['avatar'])){
                        unlink(AVATAR . $_SESSION['avatar']);
                    }
                    if(move_uploaded_file($_FILES['newImg']['tmp_name'], $cambioNombre)){
                        echo "<p><font color='green'>El avatar se cambió.</font></p>";
                    
                    }else{
                    //echo"mal";
                    //print_r($_FILES);
                    }
                }else{
                    echo"nope";
                } 
                header('Location:' . ROOT . DT . 'preferencias');

                  
            } else{
                unset($_FILES['newImg']);
                 
                echo "<p><font color='red'>El archivo no tiene un formato válido.</font></p>";
            }            
            
        }else{
            echo"no se ha seleccionado archivo";
        }
    

?>
    <form action="/preferencias" method="POST" enctype="multipart/form-data">
        Añadir imagen: <input name="newImg" id="archivo" type="file" accept="image/*"/>
=======

    <form action="/preferencias" method="POST" enctype="multipart/form-data">
        Añadir imagen: <input name="newImg" id="archivo" type="file"/>
>>>>>>> 1er commit
        <input type="submit" name="subir" value="Subir imagen"/>
        </form>

<br><br><br><br><br>
    <form action="/logout.php" method="POST">
        <input type="submit" name="logout" value="Logout" padding="50" >
    </form>

</body>
</html>