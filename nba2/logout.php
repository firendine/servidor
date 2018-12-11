<?php
<<<<<<< HEAD
=======
session_start();
>>>>>>> 1er commit
include 'config.php';
if(isset($_POST['logout']))
{
    setcookie('sesionIniciada', $_SESSION['user'], time() - 100);
<<<<<<< HEAD
    $_SESSION['logged']=false;
=======
    //unset($_COOKIE['sesionIniciada']);
>>>>>>> 1er commit
    
    header('Location:'. DT);
}



