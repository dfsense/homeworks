<?php
/**
 * Created by PhpStorm.
 * User: kovalev
 * Date: 14.11.16
 * Time: 11:33
 */

// Выведите столбец четных чисел в промежутке от нуля до 100

$html = '<table><tbody>';

for($i=0; $i<=100; $i++){
    if ($i % 2 == 0){
        $html .= '<tr><td>' . $i . '</td></tr>';
    }
}

$html .= '</tbody></table>';

echo $html;