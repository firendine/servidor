<?php

class Empleado{
    public $nombre = ("Sueño", "Muerte", "Destino", "Destrucción", "Delirio", "Desespero",
    "Deseo");
    public $sueldo;



    public function inicializar($money,$name){
        $this->nombre = $name;
        $this->sueldo = $money;

        //echo "recoge: ". $name . " ". $money;
        //echo "almacena: " . $this->nombre ." " . $this->sueldo . "\n";

    }


    public function pagarImpuestos(){
        if($this->sueldo>=3000){
             echo $this->nombre.", a pagar impuestos :)";

        }else{
             echo $this->nombre.", te libras";
        }
    }
    
}

$empleado = new Empleado();

$empleado->inicializar(700,'neeko');
$empleado->pagarImpuestos();
