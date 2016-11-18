<?php
/**
 * Created by PhpStorm.
 * User: kovalev
 * Date: 18.11.16
 * Time: 15:05
 */

// Вывести таблицу умножения с помощью двух циклов for

$html = '<table border="1"><thead><tr><td>&nbsp;</td>';

for ($i=1; $i<=10; $i++){
    $html .= '<td>' . $i . '</td>';
}

$html .= '</tr></thead><tbody>';

for ($i=1; $i<=10; $i++){
    $html .= '<tr><td>' . $i . '</td>';
    for ($j=1; $j<=10; $j++){
        $html .= '<td>' . $i * $j . '</td>';
    }
}

$html .= '</tr></tbody></table>';

echo $html;