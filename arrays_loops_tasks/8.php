<?php
/**
 * Created by PhpStorm.
 * User: kovalev
 * Date: 14.11.16
 * Time: 11:22
 */

// Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach создайте строку
// '­1­2­3­4­5­6­7­8­9­'

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];

foreach ($arr as $value){
    $res .= '-' . $value;
}
$res .= '-';
echo $res;