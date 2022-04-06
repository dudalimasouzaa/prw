<?php
$palavra="banana";
    for($indice=0; $indice<strlen($palavra);$indice++){
        if($palavra[$indice]=="a" || $palavra[$indice]=="e" || $palavra[$indice]=="i" || $palavra[$indice]=="o" || $palavra[$indice]=="u"){
            $palavra[$indice]= "x";
        }
    }
    echo "A palavra sem as vogais fica: " .$palavra;
?>