<html>
<link rel="stylesheet" href="ej2.css">
</html>
<?php

class Menu{

    public function vertical($numOp){
        echo"<nav class='contenedor'>";
            for($i=1;$i<=$numOp;$i++){
                echo "<div class='opMenuVer'> ";
                echo "<a href='ej$i.php'>";
                echo "opcion$i</div>";
            }
        echo"</nav>";
    }


    public function horizontal($numOp){
        echo"<nav class='contenedor'>";
            for($i=1;$i<=$numOp;$i++){
                echo "<div class='opMenuHor'> ";
                echo "<a href='ej$i.php'>";
                echo "opcion$i</div>";
            }
        echo"</nav>";
    }
    
}


$menu = new Menu();

$menu->horizontal(8);
$menu->vertical(5);
