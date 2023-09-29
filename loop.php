<?php

    //variavel  para o contatos
    $i = 1;

    //Executa o while externo 5 vezes
    while($i <= 5){
         echo "$i º Loop externo <br>";

         //segundo contador
         $j = 1;

         while($j <= 2){
            echo "Loop interno $j <br>";
           //acrescenta +1 ao contador 
           $j++;
        } 
         //acrescenta +1 ao contador 
            $i++;
    }
?>