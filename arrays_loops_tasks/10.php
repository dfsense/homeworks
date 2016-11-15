<?php
/**
 * Created by PhpStorm.
 * User: kovalev
 * Date: 14.11.16
 * Time: 11:31
 */

// Выведите столбец чисел от 11 до 33

$html = '<table><tbody>';
for($i=11; $i<=33; $i++){
    $html .= '<tr><td>' . $i . '</td></tr>';
}
$html .= '</tbody></table>';

echo $html;