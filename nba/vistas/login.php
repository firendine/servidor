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
  <br/><br/><br/>
<h1>Login</h1>

<form action="/compruebaLogin.php" method ="post">

  <span>Usuario:</span><br/>
  <input type="text" name="user" required> <br/>

  <span>Contraseña:</span> <br/>
  <input type="password" name="password" required> <br/><br/>

  <input type="submit" value="Entrar">
</form>
<?php
if($_SESSION['user']=='ERROR'){
  echo "<p><font color='red'>El nombre de usuario no existe.</font></p>";
  $_SESSION['user']=NULL;

} else if($_SESSION['password']=='ERROR'){
      echo "<p><font color='red'>La contraseña no coincide con el nombre de usuario.</font></p>";
      $_SESSION['password']=NULL;
}
?>
</body>
</html>