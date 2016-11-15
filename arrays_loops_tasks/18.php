<?php
/**
 * Created by PhpStorm.
 * User: kovalev
 * Date: 15.11.16
 * Time: 5:53
 */

// Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
// выходные дни следует вывести жирным.

$dayOfWeeks = ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];
$relaxDays = ['Суббота', 'Воскресенье'];

foreach ($dayOfWeeks as $day){
    $count++;
    foreach ($relaxDays as $relaxDay){
        if ($day == $relaxDay){
            ($count == 7) ? print('<b>' . $day . '</b>') : print('<b>' . $day . '</b></br>');
            $find = true;
            break;
        }
    }
    find ?
    ($count == 11) ? print($month) : print($month . '</br>');
}