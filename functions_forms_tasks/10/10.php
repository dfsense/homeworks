<?php
/**
 * Created by PhpStorm.
 * User: kovalev
 * Date: 24.11.16
 * Time: 14:28
 */

// Написать функцию, которая считает количество уникальных слов в тексте.
// Слова разделяются пробелами. Текст должен вводиться с формы.

require ("functions.php");

$html .= '<form action="10.php" method="post">
            <textarea rows="5" cols="30" name="strLine"></textarea><br>
            <input type="submit" value="Посчитать уникальные слова"></br>
         </form>';
echo $html;

if (empty($_POST["strLine"])){
    die();
}

echo $_POST["strLine"] . ' => ' . calculateUniqWords($_POST["strLine"]);
