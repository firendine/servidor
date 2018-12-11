<?php

class Eternos{
    public $nombres = array("Sueño", "Muerte", "Destino", "Destrucción", "Delirio", "Desespero",
    "Deseo");
    public $imagenes = array("suenyo.png",   "muerte.jpg",   "destino.gif",   "destruccion.jpg",
    "delirio.jpg", "desespero.jpg", "deseo.png");


    public static function visualizar(){

        foreach($this->nombres as $nombre){
        foreach($this->imagenes as $imagen){
        echo "<span>$nombre</span>";
        echo"<img src='imagenes/$imagen' class='imgEte'>";
        }
        }

    } 


}


