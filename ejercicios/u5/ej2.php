<?php 

    try{ 
        $conn = new PDO('mysql:host=localhost;dbname=nba','silvia','silvia');
    }catch(Exception $e){
        echo "no conecta";
    }




    $sql= 'SELECT * FROM equipos';

    foreach($conn->query($sql) as $row){

    echo $row['Nombre'];
    echo $row['Ciudad'];
    echo $row['Conferencia'];
    echo $row['Division'];

    }
    
