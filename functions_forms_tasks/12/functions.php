<?php
/**
 * Created by PhpStorm.
 * User: kovalev
 * Date: 26.11.16
 * Time: 13:24
 */

/**
 * for rotate all sentenses in text
 * @param $str text for rotate
 * @return string result
 */
function rotateSentenses($str){
    $arr = explode('.', $str);
    krsort($arr);
    foreach ($arr as $value){
        if (!empty($value)){
            $strTemp = ltrim($value);
            $arrRotate[] = $strTemp;
        }
    }
    $arrRotate[] = '';
    $str = implode(". ", $arrRotate);
    return $str;
}