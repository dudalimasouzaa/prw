<?php
    $sal=500;
    $salReajuste=$sal+($sal*0.5);
    $salReajuste2=$sal+($sal*0.3);
    if($sal<=300){
        echo "Seu salário com reajuste de 50% é: " .$salReajuste;
    }
    else{
        echo "Seu salário com reajuste de 30% é: ".$salReajuste2;
    }
?>