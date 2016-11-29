<?php
/**
 * Created by PhpStorm.
 * User: kovalev
 * Date: 24.11.16
 * Time: 14:50
 */

/**
 * function for change register
 * @param $str string for change
 * @return string result
 */
function upFirstChar($str){
    $arr = explode('.', $str);

    foreach ($arr as $key => $value){
        $strTemp = ltrim($value);
        $test = iconv_substr($strTemp, 0, 1);
        $test = mb_convert_case($test, MB_CASE_UPPER, "UTF-8");
        $test .= iconv_substr($strTemp, 1);
        $arr[$key] = $test;
    }

    $str = implode(". ", $arr);
    return $str;
}