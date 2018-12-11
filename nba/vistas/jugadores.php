<!DOCTYPE html>
<?php include "menu.php";?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type= "text/css" href="<?=ROOT . DT . CSS . "jugadores.css"?>">
    <title>Document</title>
</head>
<body>
<br/><br/><br/>
<h1>Jugadores</h1>

    <?php
      //  $conn = new PDO('mysql:host=localhost;dbname=nba', 'silvia', 'silvia');
        $sql_check="SELECT foto FROM jugadores";
        $statement = $conn->query($sql_check);
    ?>
            <div class="cont">
                <a href="/jugador/1">
                <img src="<?=ROOT . DT . IMG . $statement->fetchColumn(0)?>" class="jug">
                </a>
                <a href="/jugador/2">
                <img src="<?=ROOT . DT . IMG . $statement->fetchColumn(0)?>" class="jug">
                </a>
                <a href="/jugador/3">
                <img src="<?=ROOT . DT . IMG . $statement->fetchColumn(0)?>" class="jug">
                </a>
                <a href="/jugador/4">
                <img src="<?=ROOT . DT . IMG . $statement->fetchColumn(0)?>" class="jug">
                </a>
            </div>
</body>
</html>