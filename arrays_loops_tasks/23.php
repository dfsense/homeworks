<?php
/**
 * Created by PhpStorm.
 * User: kovalev
 * Date: 17.11.16
 * Time: 6:12
 */

// Вам нужно разработать программу, которая считала бы сумму цифр числа введенного
// пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1,
// 2, 3, т. е. 6.

$html = '<form action="23.php" method="get">
            <input type="text" name="num">
            <input type="submit">
         </form>';
echo $html;
$sum = 'не верный формат';
if (isset($_GET['num'])){
    $numberStr = (string)$_GET['num'];
    if (is_numeric($numberStr)) {
        $countDigits = strlen($numberStr);
        for ($i = 0; $i < $countDigits; $i++) {
            $sum += $numberStr[$i];
        }
    }
    echo $sum;
}

//unset($sum);