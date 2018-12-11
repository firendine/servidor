<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Examen 1ª Evaluación</title>
    <link rel="stylesheet" type="text/css" media="screen" href="estilos.css" />
</head>
<body>
<?php
    include "menu.php";
?>  
<div id="content">
    <?php
    include 'claseSandman.php';
$nombre_clase = 'Eternos';

 $nombre_clase::visualizar();
print Eternos::visualizar();
    ?>
</div>
</body>
</html>