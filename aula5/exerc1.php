<?php
    $n1=7;
    $n2=1;
    $n3=5;

    if($n1>$n2 and $n1>$n3){
        if($n2>$n3){
            echo "A ordem decrescente é: " .$n1 .$n2 .$n3;
        }
        else{
            echo "A ordem decresente é: " .$n1 .$n3 .$n2;
        }    
    }
    else{ 
        if($n2>$n1 and $n2>$n3){
            if($n1>$n3){
               echo "A ordem decrescente é: " .$n2 .$n1 .$n3; 
            }
            else{
                echo "A ordem decrescente é: " .$n2 .$n3 .$n2;
            }
        }
    }
    else{
        if($n3>$n1 and $n3>$n2){
            if($n1>$n2){
                echo "A ordem decresecente é: " .$n3 .$n1 .$n2;
            }
            else{
                echo "A ordem decresecente é: " .$n3 .$n2 .$n3;
            }
        }
    }
?>