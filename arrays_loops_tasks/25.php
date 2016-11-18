<?php
/**
 * Created by PhpStorm.
 * User: kovalev
 * Date: 18.11.16
 * Time: 6:12
 */

// Ваше задание создать массив, наполнить это случайными значениями (функция rand),
// найти максимальное и минимальное значение и поменять их местами.

for ($i = 0; $i < 10; $i++){
    $arr[$i] = rand(1, 100);
}
$minNum = $arr[0];
$maxNum = $arr[0];
//echo $minNum . '<br>';
//echo $maxNum . '<br>';
for ($i = 1; $i < 10; $i++){
    if ($arr[$i] < $minNum){
        $minNum = $arr[$i];
        continue;
    }
    if ($arr[$i] > $maxNum){
        $maxNum = $arr[$i];
    }
}
echo '<pre>';
print_r($arr);
echo '</pre></br>';
echo 'максимальное значение = ' . $minNum . '</br>минимальное значение = ' . $maxNum;