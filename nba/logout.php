<?php
include 'config.php';
if(isset($_POST['logout']))
{
    setcookie('sesionIniciada', $_SESSION['user'], time() - 100);
    $_SESSION['logged']=false;
    
    header('Location:'. DT);
}



