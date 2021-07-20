<?php

/*
4 - Função SequenciaCrescente($array)
Receba como parametro um array de números inteiros e responda TRUE or FALSE se é possível obter uma sequencia crescente removendo apenas um elemento do array.

Exemplos para teste

Obs.:-  É Importante  realizar todos os testes abaixo para garantir o funcionamento correto.
-  Sequencias com apenas um elemento são consideradas como TRUE

[1, 3, 2, 1]  false
[1, 3, 2]  true
[1, 2, 1, 2]  false
[3, 6, 5, 8, 10, 20, 15] false
[1, 1, 2, 3, 4, 4] false
[1, 4, 10, 4, 2] false
[10, 1, 2, 3, 4, 5] true
[1, 1, 1, 2, 3] false
[0, -2, 5, 6] true
[1, 2, 3, 4, 5, 3, 5, 6] false
[40, 50, 60, 10, 20, 30] false
[1, 1] true
[1, 2, 5, 3, 5] true
[1, 2, 5, 5, 5] false
[10, 1, 2, 3, 4, 5, 6, 1] false
[1, 2, 3, 4, 3, 6] true
[1, 2, 3, 4, 99, 5, 6] true
[123, -17, -5, 1, 2, 3, 12, 43, 45] true
[3, 5, 67, 98, 3] true
 */

function SequenciaCrescente($array)
{
    $n = count($array);
    $LIS = array();
    $len = 0;

    for ($i = 0; $i < $n; $i++) {
        $LIS[$i] = 1;
    }

    for ($i = 1; $i < $n; $i++) {
        for ($j = 0; $j < $i; $j++) {
            if ($array[$i] > $array[$j]) {
                $LIS[$i] = max($LIS[$i],
                    $LIS[$j] + 1);
            }
        }
        $len = max($len, $LIS[$i]);
    }
    if ($n - $len === 1) {
        return true;
    }
    return false;
}

$array = [3, 5, 67, 98, 3];

echo SequenciaCrescente($array);
