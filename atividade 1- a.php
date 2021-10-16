<?php
/*1) usando os códigos das aula anteriores você deve implementar o seguinte:

     a) uma função para calcular o fatorial usando while*/

     $a = rand(1, 10);
     $b = 1;
     printf("o fatorial de %d <br>", $a);
     while ($a > 1){
         $b *= $a;
         $a--;
     }
     printf("o resultado é: %d", $b); 
?>