<?php
/* 2) Dadas as funções do exercícios 1 faça o seguinte:
 b) armazene em um vetor os primeiros n primo dado. 
 Exiba no cliente os elementos do vetor.*/
    $a = rand(1, 10);
    $b = 1;
    $c = 0;
        if($a){
            $d = [];
        }
        if ( $a ) {
            do {
                if( $a % $b == 0 ) {
                    $d[] = $b;
                    $c++;
                }
                $b++;
            } while ( $b<= $a );
            if ( $c== 2 )
                printf( "%d é um numero primo <br>",$a);
            else 
                printf( "%d é um número composto <br>", $a);
            }  ;
            print_r($d);
?>