<?php
/**
 * Created by PhpStorm.
 * User: kovalev
 * Date: 24.11.16
 * Time: 5:12
 */

function addComment($str){
    $arr = unserialize($_COOKIE['arrComment']);
    $arr[] = $str;
    setcookie("arrComment", serialize($arr));
}