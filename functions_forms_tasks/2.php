<?php
/**
 * Created by PhpStorm.
 * User: kovalev
 * Date: 23.11.16
 * Time: 5:45
 */

// Создать форму с элементом textarea.
// При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте.
// Реализовать с помощью функции

$html = '<p>Для разделения слов должен использоваться только пробел</p>
            <form method="get" action="2.php">
            <textarea name="text1" rows="10"></textarea>&nbsp;
            <input type="submit"></form>';
echo $html;

if (empty($_GET['text1'])){
    die("не заполнены данные");
}

$str1 = $_GET['text1'];

/**
 * calculate lentgth all words and return words with top 3
 * @param $a - processed string
 * @return array - array with result
 */
function getTopLongWords($a){
    $arr = explode(' ', $a);
    for ($i=0; $i<count($arr); $i++){
        $arrLen[$i] = iconv_strlen($arr[$i]);
    }
    arsort($arrLen);
    $i = 0;
    foreach ($arrLen as $key => $value){
        if ($i++ == 3){
            break;
        }
        $arrRes[] = $arr[$key];
    }
    return $arrRes;
}

echo '<pre>';
print_r(getTopLongWords($str1));
echo '</pre>';