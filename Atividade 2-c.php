<?php
/*2) Dadas as funções do exercícios 1 faça o seguinte:
    c) armazene em um vetor os primeiros n perfeitos encontrados. 
    Exiba no cliente os elementos do vetor*/
$numero = rand(1, 10);
$i = 1;
$resultado = 0;
$array =[];
if ( $numero ) {
    
    for ( $i = 1; $i < $numero; $i++ ) {
       if( $numero % $i == 0 ) {
        $resultado += $i;
        $array[]=$i;
           echo $i;
        }
   }
    if ( $resultado == $numero ) 
        printf ("%d é um número perfeito <br>", $numero);
   else 
        printf("%d não é um número perfeito <br>",$numero);
}
print_r ($array);
?>