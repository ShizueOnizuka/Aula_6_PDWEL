<?php
/*1) usando os códigos das aula anteriores você deve implementar o seguinte:
     c) uma função para retornar se um numero é perfeito. 
     Observação um número natural é perfeito se e somente se a soma de seus divisores é o próprio número.*/
$numero = rand(1, 10);
$i = 1;
$resultado = 0;
if ( $numero ) {
    for ( $i = 1; $i < $numero; $i++ ) {
       if( $numero % $i == 0 ) {
        $resultado += $i;
           echo $i;
        }
   }
    if ( $resultado == $numero ) 
        printf ("%d é um número perfeito", $numero);
   else 
        printf("%d não é um número perfeito",$numero);
}
?>