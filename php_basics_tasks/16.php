<?php
/**
 * Created by PhpStorm.
 * User: kovalev
 * Date: 11.11.16
 * Time: 3:42
 */

// Создайте две переменные $a и $b, значения которых будут числами. Выведите максимальное число из этих двух.

$a = 23;
$b = 23;

if ($a > $b){
    echo "{$a} > {$b}";
} elseif ($a == $b){
    echo "{$a} = {$b}";
} else{
    echo "{$a} < {$b}";
}