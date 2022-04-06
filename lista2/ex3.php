<?php

for($num=1;$num<=200;$num++){
    $n_primo=1;
    for($divisor=2; $divisor<$num; $divisor++){

        if($num%$divisor==0){
            $n_primo=0;
            break;
        }
    }
    if($n_primo){
        echo "O número " .$num. " é primo" ."<br>";
    }
    else{
        echo "O número " .$num. " não é primo" ."<br>";
    }
}