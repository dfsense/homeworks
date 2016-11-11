<?php
/**
 * Created by PhpStorm.
 * User: kovalev
 * Date: 11.11.16
 * Time: 4:10
 */

// Приведите число -20 к типу boolean. Объясните результат.

$var = -1;
$varCastBoolean = (boolean)$var;


echo "при приведении любого числа, положительного или отрицательного, за исключением 0, к типу boolean всегда будет ";
var_dump($varCastBoolean);