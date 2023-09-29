<?php

$array = range(10, 100, 10);


foreach ($array as $valor) {
  
    if ($valor == 30 || $valor == 40) {
        continue;
    }
    echo $valor . "\n";
}
?>
