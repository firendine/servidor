<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Examen 1ª Evaluación</title>
    <link rel="stylesheet" type="text/css" media="screen" href="estilos.css" />
</head>
<body>
<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=examen", "silvia", "silvia");
    $conn->exec("set names utf8");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "<p>Error: Cannot connect to database server.</p>\n";
    echo $e;
    exit();
}
    include "menu.php";
    $idVengador = ($_GET["id"]);
    $sql="SELECT * FROM vengadores WHERE id = '$idVengador'";
    echo $idVengador;

    foreach ($conn->query($sql) as $row) {
        $nombre= $row['nombre'];
        $alias= $row['alias'];
        $poderes = $row['poderes'];
        $imagen = $row['imagen'];

    }
?>  
<div id="content">
    <div id="avgCharacter">
        <div id="avgImage">
            <img src="imagenes/<?php echo $imagen;?>">
        </div>
        <div id="avgData">
            <table border="1" cellspacing="1" cellpadding="5">
                <tr>
                    <th>Nombre: </th>
                    <td><?php echo $nombre;?></td>
                </tr>
                <tr>
                    <th>Alias: </th>
                    <td><?php echo $nombre;?></td>
                </tr>
                <tr>
                    <th>Poderes:</th>
                    <td>
                    <?php echo "<ul>";
                    //for($i)$poderes;
                    
                    ?>
                    </td>
                </tr>
            </table>    
        </div>
    </div>
</div>
</body>
</html>