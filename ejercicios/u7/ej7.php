<?php
class Celda{

    private $texto;
    private $colorFuente;
    private $colorFondo;

    function __construct($texto, $colorfuente, $colofondo){
        $this->texto=$texto;
        $this->colorFuente=$colorFuente;
        $this->colorfondo=$colorFondo;
    }

    public function graficar(){
        echo "backgound-color='$this->colorFondo' color='$this->colorFuente'>$texto</td>";
    }

}

class Tabla {
  private $cantFilas;
  private $cantColumnas;
  private $celdas=array();
  private $celda;

  public function __construct($fi,$col)
  {
    $this->cantFilas=$fi;
    $this->cantColumnas=$col;
    //$this->celda = new Celda('Hola','green', 'black');
  }

  public function cargar($fila,$columna,$text,$colorfuente,$colorFondo)
  {
    $this->celdas[$fila][$columna]= new Celda($text,$colorFuente,$colorFondo);
  }

  public function inicioTabla()
  {
    echo '<table border="1">';
  }

  public function inicioFila()
  {
    echo '<tr>';
  }

  public function mostrar($fi,$col)
  {
    $this->celdas[$fi][$co]->graficar();
  }

  public function finFila()
  {
    echo '</tr>';
  }

  public function finTabla()
  {
    echo '</table>';
  }

  public function graficar()
  {
    $this->inicioTabla();
    for($f=1;$f<=$this->cantFilas;$f++)
    {
      $this->inicioFila();
      for($c=1;$c<=$this->cantColumnas;$c++)
      {
         $this->mostrar($f,$c);
      }
      $this->finFila();
    }
    $this->finTabla();
  }
}


$celda1 = new Celda("Hola buenas", "green", "black");

$tabla1=new Tabla(2,3);
$tabla1->cargar(1,1,"1");
$tabla1->cargar(1,2,"2");
$tabla1->cargar(1,3,"3");
$tabla1->cargar(2,1,"4");
$tabla1->cargar(2,2,"5");
$tabla1->cargar(2,3,"6");
$tabla1->graficar();
