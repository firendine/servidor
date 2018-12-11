<<<<<<< HEAD
<?php
//session_start();
include "menu.php";
?>

=======
>>>>>>> 1er commit
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/login.css">
<<<<<<< HEAD
    <title>Login</title>
=======
    <title>Sign Up</title>
>>>>>>> 1er commit
</head>
<body>
  <br/><br/><br/>
<h1>Sign Up</h1>

<<<<<<< HEAD
<form action="/compruebaSignUp.php" method ="post">

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
=======
<form action="/compruebaSignup.php" method ="post">

  <span>Usuario:</span><br/>
  <input type="text" name="user"> <br/>

  <span>Contraseña:</span> <br/>
  <input type="password" name="password"> <br/><br/>

  <input type="submit" value="Registrar">
</form>

</body>
>>>>>>> 1er commit
