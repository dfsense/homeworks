<?php
/**
 * Created by PhpStorm.
 * User: kovalev
 * Date: 10.11.16
 * Time: 5:09
 */

// Написать калькулятор.
// Переменная $var1 = изменяемое число.
// Переменная $var2 = изменяемое число.
// Переменная $operator = ‘+’ или ‘-’ или ‘/’ или ‘*’ или '%' (остаток от деления).
// На экран выводить результат в зависимости от значений этих переменных.
// Не забудьте проверить деление на 0, если надо - выдавать ошибку что на 0 делить нельзя.

$var1 = 9;
$var2 = 8;
$operator = '^';

switch ($operator){
    case '+':
        $res = $var1 + $var2;
        echo "{$var1} + {$var2} = {$res}";
        break;
    case '-':
        $res = $var1 - $var2;
        echo "{$var1} - {$var2} = {$res}";
        break;
    case '*':
        $res = $var1 * $var2;
        echo "{$var1} * {$var2} = {$res}";
        break;
    case '/':
        if ($var2 == 0){
            echo "на 0 делить нельзя";
            break;
        }
        $res = $var1 / $var2;
        echo "{$var1} / {$var2} = {$res}";
        break;
    case '%':
        if ($var2 == 0){
            echo "на 0 делить нельзя";
            break;
        }
        $res = $var1 % $var2;
        echo "{$var1} % {$var2} = {$res}";
        break;
    default:
        echo "Неизвестная операция";
        break;
}