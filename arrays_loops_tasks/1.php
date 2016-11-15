<?php
/**
 * Created by PhpStorm.
 * User: kovalev
 * Date: 14.11.16
 * Time: 9:48
 */

// Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'.
// С помощью цикла foreach выведите эти слова в столбик.

$arr = ['html', 'css', 'php', 'js', 'jq'];

foreach ($arr as $el){
    echo $el.'</br>';
}