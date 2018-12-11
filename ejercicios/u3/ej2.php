<?php
$archivo = fopen("ej1.txt","r");
$texto= fread($archivo, filesize("ej1.txt"));
echo $texto;