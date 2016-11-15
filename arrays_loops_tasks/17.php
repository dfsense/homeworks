<?php
/**
 * Created by PhpStorm.
 * User: kovalev
 * Date: 15.11.16
 * Time: 5:41
 */

// Сосктавьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий
// месяц выведите жирным. Текущий месяц должен храниться в переменной $month.

$allMonths = ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль',
              'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'];
$curMonth = 'Ноябрь';

foreach ($allMonths as $month){
    $count++;
    if ($month == $curMonth){
        ($count == 12) ? print('<b>' . $month . '</b>') : print('<b>' . $month . '</b></br>');
        continue;
    }
    ($count == 11) ? print($month) : print($month . '</br>');
}

