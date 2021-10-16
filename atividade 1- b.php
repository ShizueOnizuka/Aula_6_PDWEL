<?php
/*1) usando os códigos das aula anteriores você deve implementar o seguinte:
    b) uma função para retorna se um numero é primo ou composto usando do...while */

    $a = rand(1, 10);
    $b = 1;
    $c = 0;

        if ( $a ) {
            do {
                if( $a % $b == 0 ) {
                    $c++;
                }
                $b++;
    
            } while ( $b<= $a );
    
            if ( $c== 2 )
                printf( "%d é um numero primo",$a);
            else 
                printf( "%d é um número composto", $a);
        }  ;
    
?>