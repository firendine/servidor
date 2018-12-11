<html>
<link rel="stylesheet" href="ej2.css">
</html>
<?php 

class Menu{
    private $numOp;
    public $tipoMenu;


    private function horizontal($numOp){
        echo"<nav class='contenedor'>";
            for($i=1;$i<=$numOp;$i++){
                echo "<div class='opMenuHor'> ";
                echo "<a href='ej$i.php'>";
                echo "opcion$i</div>";
            }
        echo"</nav>";
    }

    private function vertical($numOp){
        echo"<nav class='contenedor'>";
            for($i=1;$i<=$numOp;$i++){
                echo "<div class='opMenuVer'> ";
                echo "<a href='ej$i.php'>";
                echo "opcion$i</div>";
            }
        echo"</nav>";
    }

    public function mostrar($numOp, $tipoMenu){
        if($tipoMenu=='vertical'){
            $this->vertical($numOp);
        }else if($tipoMenu=='horizontal'){
            $this->horizontal($numOp);
        }else{
            echo "opcion no valida";
            echo $this->numOp . "aa";
        }
    }
}

$menu = new Menu();

$menu->mostrar(4,"horizontal");