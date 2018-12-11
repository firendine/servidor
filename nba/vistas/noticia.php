<?php 
$key = $keys[0][0];
$idNoticia = $params[$key];


switch ($idNoticia) {

    case 1:  include_once "noticia1.php";
        break;
    case 2:  include_once "noticia2.php";
        break;
    case 3:  include_once "noticia3.php";
        break;
    case 4:  include_once "noticia4.php";
        break;
}
?>
