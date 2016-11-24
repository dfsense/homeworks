<?php
/**
 * Created by PhpStorm.
 * User: kovalev
 * Date: 24.11.16
 * Time: 6:09
 */

// Написать функцию, которая переворачивает строку.
// Было "abcde", должна выдать "edcba". Ввод текста реализовать с помощью формы.

require ("functions.php");

$html .= '<form action="9.php" method="post">
            <input name="strLine"/><br>
            <input type="submit" value="Перевернуть"></br>
         </form>';
echo $html;

if (empty($_POST["strLine"])){
    die();
}

echo $_POST["strLine"] . ' => ' . rotateStr($_POST["strLine"]);
