<html>
<link rel="stylesheet" href="ej3.css">
</html>
<?php

class CabeceraPagina{
    private $titulo = "Titulo de página";

    public function alineacion($opc){

        echo"<h1 class='$opc'>$this->titulo</h1>";
    }    
}


$cab = new CabeceraPagina();

$cab->alineacion('center');
