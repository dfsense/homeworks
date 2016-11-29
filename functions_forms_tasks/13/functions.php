<?php
/**
 * Created by PhpStorm.
 * User: kovalev
 * Date: 29.11.16
 * Time: 5:41
 */

function calculateCountWords($str){
    $arr = explode(' ', $str);
    $arrCount = array();
    while(count($arr)>0){
        if (!array_key_exists($arr[0], $arrCount)){
            $arrCount[$arr[0]] = 1;
        }
        $strSearch = $arr[0];
        unset($arr[0]);
        foreach ($arr as $key => $value){
            if ($value === $strSearch){
                $arrCount[$strSearch]++;
                unset($arr[$key]);
            }
        }
        sort($arr);
    }
    return $arrCount;
}

function buildTable($arr){
    $html = '<table border="1"><thead><th>Фрукты</th><th>кол-во</th></thead><tbody>';
    foreach ($arr as $key => $value){
        $html .= '<tr><td>' . $key . '</td><td>' . $value . '</td></tr>';
    }
    $html .= '</tbody></table>';
    return $html;
}