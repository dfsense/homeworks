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

foreach ($dayOfWeeks as $day){
    if ($day == 'Суббота') {
        echo '<b>' . $day . '</b></br>';
        continue;
    }
    if ($day == 'Воскресенье') {
        echo '<b>' . $day . '</b>';
        break;
    }
    echo $day . '</br>';
}