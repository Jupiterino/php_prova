<?php 
    require_once "Alunno.php";

    $A1 = new Alunno("Gigi", "Rossi", "14");
    $A2 = new Alunno("Gino", "Verdi", "16");
    $A3 = new Alunno("Pino", "Gialli", "15");

    $Array = Array($A1, $A2, $A3);

    for($i=0; $i< count($Array); $i++){
        
        echo $Array[$i]->toString() . "<br>";
    }

?>
