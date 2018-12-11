<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        #map{
            width: 100%;
            height: 400px;
            background-color: grey;
        }
    </style>
</head>
<body>


    <h3>Demo google maps<h3>
    <div id='map'></div>
<?php

try {
    $conn = new PDO("mysql:host=localhost;dbname=lugares", "silvia", "silvia");
    $conn->exec("set names utf8");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "ESTOY AQUIIII";
} catch (PDOException $e) {
    echo "<p>Error: Cannot connect to database server.</p>\n";
    echo $e;
    exit();
}

$sql="SELECT latitud, longitud FROM ubicaciones";


echo '<script>';
echo 'function initMap(latitud,longitud){';
echo" var map = new google.maps.Map(";
foreach($conn->query($sql)) { //echa un ojo a fetch num

    $coor= array($i=>);
echo "var lugar={lat:'.$latitud .', lng: '. $longitud .'};";

echo"document.getElementById('map'), {zoom: 4, center: lugar});
    var marker = new google.maps.Marker({position: lugar, map: map});
    var marker = new google.maps.Marker({position: lugar, map: map});
    }";
}
echo '</script>
<script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBWKblg8NE4kXK_C9C7p8s8DAq-wtUiZ4E&amp;callback=initMap('.$latitud.','.$longitud.')">
</script>';



?>
</body>
</html>