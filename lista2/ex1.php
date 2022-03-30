<?php
$n_par=0;
$soma=0;
for($n_par=0;$n_par<100;$n_par++){
   if ($n_par%2==0){
    $soma=$soma+$n_par;

   }
}
echo "A soma de todos os números pares menores que 100 é: " .$soma;
?>