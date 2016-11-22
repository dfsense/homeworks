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

echo '<pre>';
print_r($arr);
echo '</pre>';
$minNum = $arr[0];
$maxNum = $arr[0];
for ($i = 1; $i < 10; $i++){
    if ($arr[$i] < $minNum){
        $minNum = $arr[$i];
        $minIndex = $i;
        continue;
    }
    if ($arr[$i] > $maxNum){
        $maxNum = $arr[$i];
        $maxIndex = $i;
    }
}

$arr[$minIndex] = $maxNum;
$arr[$maxIndex] = $minNum;

echo '<pre>';
print_r($arr);
echo '</pre></br>';
echo 'максимальное значение = ' . $minNum . '</br>минимальное значение = ' . $maxNum;