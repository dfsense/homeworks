<?php
/**
 * Created by PhpStorm.
 * User: kovalev
 * Date: 14.11.16
 * Time: 10:38
 */

// Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей, с
// помощью второго — столбец элементов

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

echo 'Значения:</br>';
foreach ($arr as $val){
    echo $val . '</br>';
}

echo '</br>Ключи:</br>';
foreach ($arr as $key => $value){
    echo $key . '</br>';
}