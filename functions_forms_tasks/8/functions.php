<?php
/**
 * Created by PhpStorm.
 * User: kovalev
 * Date: 24.11.16
 * Time: 5:12
 */
/**
 * filling array with bad words and saving in superglobal variable '_COOQIE"
 */
if (!isset($_COOKIE["arrMats"])){
    $arrMats = [ "мудак", "мудило", "мудила", "сука", "сучара", "дебил"];
    setcookie("arrMats", serialize($arrMats));
}
/**
 * add comment to common array in _COOQIE
 * @param $str string for adding
 */
function addComment($str){
    $arr = unserialize($_COOKIE['arrComment']);
    $arr[] = $str;
    setcookie("arrComment", serialize($arr));
}

/**
 * delete some special symbols ('<','>')
 * @param $str string for search special symbols
 * @return mixed return changed string
 */
function delSomeSpecSymbols($str){
    return str_replace(array("<", ">"), "", $str);
}

/**
 * search bad words and if find then return string 'Некорректный комментарий'
 * @param $str string for searching
 * @return string result
 */
function checkMats($str){
    foreach (unserialize($_COOKIE["arrMats"]) as $el){
        if (is_numeric(stripos($str, $el))){
            return "Некорректный комментарий";
        }
    }
    return $str;
}