<?php
/**
 * Created by PhpStorm.
 * User: kovalev
 * Date: 24.11.16
 * Time: 5:12
 */

if (!isset($_COOKIE["arrMats"])){
    $arrMats = [ "мудак", "мудило", "мудила", "сука", "сучара", "дебил"];
    setcookie("arrMats", serialize($arrMats));
}

function addComment($str){
    $arr = unserialize($_COOKIE['arrComment']);
    $arr[] = $str;
    setcookie("arrComment", serialize($arr));
}

function delSomeSpecSymbols($str){
    return str_replace(array("<", ">"), "", $str);
}

function checkMats($str){
    foreach (unserialize($_COOKIE["arrMats"]) as $el){
        if (is_numeric(stripos($str, $el))){
            return "Некорректный комментарий";
        }
    }
    return $str;
}