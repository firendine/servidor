<?php


$archivo = fopen("ej1.txt","w");
$frase = "-texto anadido :)-";
fwrite($archivo, $frase);
fwrite($archivo, "\notra frase");
$texto= fgets($archivo);
echo $texto;