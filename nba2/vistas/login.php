<?php
session_start();
include "menu.php";
<<<<<<< HEAD
/*
=======

>>>>>>> 1er commit
if($_SESSION['user']=='ERROR'){
    echo "<script type='text/javascript'>window.confirm('El usuario introducido no existe.');</script>";
    $_SESSION['user']=NULL;

}else if($_SESSION['password']=='ERROR'){
  echo "<script type='text/javascript'>window.confirm('La contraseña introducida no es correcta.');</script>";
  $_SESSION['password']=NULL;
}
<<<<<<< HEAD
*/
?>

=======

?>
>>>>>>> 1er commit
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/login.css">
    <title>Login</title>
</head>
<body>
  <br/><br/><br/>
<h1>Login</h1>

<form action="/compruebaLogin.php" method ="post">

  <span>Usuario:</span><br/>
<<<<<<< HEAD
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
=======
  <input type="text" name="user"> <br/>

  <span>Contraseña:</span> <br/>
  <input type="password" name="password"> <br/><br/>

  <input type="submit" value="Entrar">
</form>

>>>>>>> 1er commit
</body>
</html>