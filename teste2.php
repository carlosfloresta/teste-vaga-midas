<?php

/*
2 -Função PrimoInferior($num)
Crie uma função que receba como parâmetro um número inteiro e retorne o maior número primo inferior ao número recebido como parâmetro. Se o argumento for negativo, a função deverá retornar o valor zero.

Exemplo para teste:

Numero 10 = 7
Número 30 = 29
 */

function PrimoInferior(int $num)
{
    $range = range($num, 0);
    foreach ($range as $v) {
        if (gmp_prob_prime($v) == 2 && $v > 0) {
            return $v;
        }
    }
    return 0;
}

echo PrimoInferior(30);
