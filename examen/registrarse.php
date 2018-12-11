<?php
session_start();
include "menu.php";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilos.css">
    <title>Login</title>
</head>
<body>
  <br/><br/><br><br>

<form action="compruebaregistro.php" method ="post">

  <span>Usuario:</span><br/>
  <input type="text" name="user" required> <br/>

  <span>Contraseña:</span> <br/>
  <input type="password" name="password" required> <br/><br/>

  <input type="submit" value="Entrar">
</form>
<?php


  if($_SESSION['user']=='ERROR'){
      echo "<p><font color='red'>El nombre de usuario introducido ya existe, introduzca otro.</font></p>";
      $_SESSION['user']=NULL;

  }else if($_SESSION['user']=='DONE'){
      echo "<p><font color='green'>Usuario registrado con éxito.</font></p>";
      $_SESSION['user']=NULL;
  }
?>

</body>
</html>