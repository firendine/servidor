<?php
//session_start();
include "menu.php";
//$conn = new PDO('mysql:host=localhost;dbname=nba', 'silvia', 'silvia');




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Partidos</title>
</head>
<body>
    <form action="/partidos" id="puntuacion" name="puntuacion" method="post">
        <select form="puntuacion" name="temporada">

<?php
    $sql_temporadas="SELECT DISTINCT temporada FROM estadisticas";
    foreach($conn->query($sql_temporadas) as $row){
        $temporada=$row['temporada'];
        echo"<option value='$temporada'> $temporada </option>";
    }
?>

        </select>
        <input type="submit"  value="Submit"/>
    </form>

<?php
    $anyo=$POST['temporada'];
    echo "aaaaa". $anyo;
    $sql_puntos="SELECT equipo_local, puntos_local, equipo_visitante, puntos_visitante FROM partidos WHERE temporada LIKE '$anyo' AND (equipo_local='Timberwolves' OR equipo_visitante='Timberwolves')";
    echo $sql_puntos;
    foreach($conn->query($sql_puntos) as $row){
        echo"<p>".$row['equipo_local']." - ". $row['equipo_visitante'] ."</p>";
        echo"<p>".$row['puntos_local']." - ". $row['puntos_visitante'] ."</p>";
       echo" <br/><br/><br/><br/>";
    }  
?>

</body>
</html>

