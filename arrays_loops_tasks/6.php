<?php
/**
 * Created by PhpStorm.
 * User: kovalev
 * Date: 14.11.16
 * Time: 10:51
 */

// Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en,
// а русские — в массив $ru.

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

foreach ($arr as $key => $value){
    $en[] = $key;
    $ru[] = $value;
}
print_r($en);
echo '</br>';
print_r($ru);
//$en = array('green', 'red','blue');
//$ru = array('зеленый', 'красный', 'голубой');