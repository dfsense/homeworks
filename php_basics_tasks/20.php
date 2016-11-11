<?php
/**
 * Created by PhpStorm.
 * User: kovalev
 * Date: 11.11.16
 * Time: 3:56
 */

// Приведите число 20 к типу boolean. Объясните результат.

$var = 20;
$varCastBoolean = (boolean)$var;


echo "при приведении целого числа, которое не равно нулю, к типу boolean будет ";
var_dump($varCastBoolean);
