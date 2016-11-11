<?php
/**
 * Created by PhpStorm.
 * User: kovalev
 * Date: 11.11.16
 * Time: 4:08
 */

// Приведите число 0 к типу boolean. Объясните результат.

$var = 0;
$varCastBoolean = (boolean)$var;


echo "при приведении 0 или null, к типу boolean всегда будет ";
var_dump($varCastBoolean);