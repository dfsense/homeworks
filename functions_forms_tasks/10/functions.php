<?php
/**
 * Created by PhpStorm.
 * User: kovalev
 * Date: 24.11.16
 * Time: 14:33
 */

/**
 * calculate how much uniq words in string
 * @param $str string for calculation
 * @return int count uniq words
 */
function calculateUniqWords ($str){
    $arr = explode(" ", $str);
    return count(array_unique($arr));
}