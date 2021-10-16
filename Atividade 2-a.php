<?php
/*2) Dadas as funções do exercícios 1 faça o seguinte:
     a) armazene em um vetor os primeiros n fatoriais dado que n é o parâmetro da função fatorial. 
     Exiba no cliente os elementos do vetor.
      */
        $numero = rand(1, 10);
        $fatorial = 1;
        $contador = 1;

        if($numero) {
            $fatoriais = [];
            while( $contador <= $numero ) {
                $fatorial *= $contador;
                $fatoriais[$contador] = $fatorial;
                $contador++;
            }
            print_r($fatoriais);
        }
?>