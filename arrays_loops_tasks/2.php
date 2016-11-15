<?php
/**
 * Created by PhpStorm.
 * User: kovalev
 * Date: 14.11.16
 * Time: 10:32
 */

// Дан массив с элементами 1, 20, 15, 17, 24, 35.
// С помощью цикла foreach найдите сумму элементов этого массива.
// Запишите ее в переменную $result.

$arr = [ 1, 20, 15, 17, 24, 35];

foreach ($arr as $el){
    $result += $el;
}

echo 'Сумма всех элементов равна ' . $result;
