<?php


$archivo = fopen("ej1.txt","r");
$texto= fgets($archivo);
echo $texto;
//for(i=0;i<=texto.lenght();)
echo filesize("ej1.txt");

/////
$lineas=file("ej1.txt");
unset($lineas[count($lineas)]);
//archivo = fopen
foreach($lineas as $lineas){
    fwrite($archivo,$linea);
}
fclose($archivo);
$archivo=fopen();