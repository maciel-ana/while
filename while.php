<?php

$contador = 4;

while ($contador <= 30) {
    if ($contador == 24) {
        break; 
    }
    
    echo "Contador: $contador<br>";
    
    $contador += 2; 
}

?>