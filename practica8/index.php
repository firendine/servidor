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
    <button type="button" onclick="">Ademuz</button>
    <div id='map'></div>
<?php
$lugar = 'Egiarreta';

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
echo $lugar . 'aa';

$sql="SELECT latitud, longitud FROM ubicaciones WHERE nombre LIKE '$lugar' ";

foreach ($conn->query($sql) as $row) {
   $latitud= $row['latitud'];
$longitud= $row['longitud'];
}


echo '<script>
function initMap(){
    var lugar={lat:'.$latitud .', lng: '. $longitud .'};
    var map = new google.maps.Map(
        document.getElementById("map"), {zoom: 4, center: lugar});
    var marker = new google.maps.Marker({position: lugar, map: map});
}
</script>


<script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBWKblg8NE4kXK_C9C7p8s8DAq-wtUiZ4E&amp;callback=initMap">
</script>';
?>
</body>
</html>