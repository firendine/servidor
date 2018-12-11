<?php
$archivo = fopen("ej1.txt","r");
$texto= fgets($archivo);
echo $texto;
echo time();