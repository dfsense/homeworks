<?php
/**
 * Created by PhpStorm.
 * User: kovalev
 * Date: 23.11.16
 * Time: 4:55
 */

// Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать только те слова,
// которые есть и в первом и во втором поле ввода.
// Реализацию это логики необходимо поместить в функцию getCommonWords($a, $b),
// которая будет возвращать массив с общими словами

$html = '<p>Для разделения слов должен использоваться только пробел</p>
            <form method="get" action="1.php">
            <textarea name="text1" rows="10"></textarea>&nbsp;
            <textarea rows="10" name="text2"></textarea>&nbsp;
            <input type="submit"></form>';
echo $html;

if (empty($_GET['text1']) || empty($_GET['text2'])){
    die("не заполнены данные");
}

$str1 = $_GET['text1'];
$str2 = $_GET['text2'];

/**
 * compare 2 string and return common words
 * @param $a - string 1
 * @param $b - string 2
 * @return array - array with common words
 */
function getCommonWords($a, $b){
    return array_intersect(explode(' ', $a), explode(' ', $b));
}

echo '<pre>';
print_r(getCommonWords($str1, $str2));
echo '</pre>';

