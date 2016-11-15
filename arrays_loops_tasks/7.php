<?php
/**
 * Created by PhpStorm.
 * User: kovalev
 * Date: 14.11.16
 * Time: 10:59
 */

// Дан массив с элементами 2, 5, 9, 15, 0, 4. С помощью цикла foreach и оператора if
// выведите на экран столбец тех элементов массива, которые больше 3­х, но меньше 10

$arr = [2, 5, 9, 15, 0, 4];

$html = '
<table border="1">
    <tbody>';

foreach ($arr as $value){
    if ($value > 3 && $value < 10){
$html .= '
          <tr>
              <td>' . $value . '</td>
          </tr>';
    }
}

$html .= '
    </tbody>
</table>';

echo $html;
