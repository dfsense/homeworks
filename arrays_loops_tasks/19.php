<?php
/**
 * Created by PhpStorm.
 * User: kovalev
 * Date: 17.11.16
 * Time: 5:49
 */

// Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а
// текущий день выведите курсивом. Текущий день должен храниться в переменной $day.

$dayOfWeeks = ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];
//$day = 'Четверг';

foreach ($dayOfWeeks as $el){
    $countDay++;
    if ($countDay == date('N')){
        echo '<em>' . $el . '</em></br>';
        continue;
    }
    echo $el . '</br>';
}