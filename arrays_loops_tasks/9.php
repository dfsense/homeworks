<?php
/**
 * Created by PhpStorm.
 * User: kovalev
 * Date: 14.11.16
 * Time: 11:26
 */

// Выведите столбец чисел от 1 до 100

$html = '<table><tbody>';
for ($i=1; $i<=100; $i++){
    $html .= '<tr><td>' . $i . '</td></tr>';
}
$html .= '</tbody></table>';

echo $html;