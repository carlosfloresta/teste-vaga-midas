<?php
/*
3 - Escreva um programa
Escreva um programa que preencha um array com 20 números inteiros sorteados entre 1 e 10. Depois informe qual número mais se repetiu e quantas vezes ele se repetiu.

Exemplo

Array sorteado = [2,5,8,2,8,5,3,9,6,3,4,6,3,1,2,1,2,3,7,1]
O número que mais se repete é o 2.
Ele se repete 4 vezes
 */

function sorteio(int $num, int $sort)
{
    $range = range($sort, 1);
    $array = [];

    for ($i = 0; $i < $num; $i++) {
        $id = random_int(1, count($range) - 1);
        $array[] = $range[$id];
    }
    $stringArray = implode(",", $array);
    $values = array_count_values($array);
    arsort($values);
    return ("Array sorteado = [" . $stringArray . "]" . "\nO número que mais se repete é o " . array_keys($values)[0] . "\nEle se repete " . array_values($values)[0] . " vezes");
}

echo sorteio(20, 10);
