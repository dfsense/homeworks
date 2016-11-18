<?php
/**
 * Created by PhpStorm.
 * User: kovalev
 * Date: 18.11.16
 * Time: 5:33
 */

// Вам нужно разработать программу, которая считала бы количество вхождений
// какой­нибуть выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе
// 442158755745 встречается 4 раза.

$html = '<form action="24.php" method="get">
            найти цифру <input type="text" name="digit"><br>
            в числе <input type="text" name="number"></br>
            <input type="submit">
         </form>';
echo $html;
$errorParsing = true;
if (isset($_GET['number']) && isset($_GET['digit'])){
    $numberStr = (string)$_GET['number'];
    $digitStr = (string)$_GET['digit'];
    if (is_numeric($numberStr) && is_numeric($digitStr)) {
        $errorParsing = false;
        $countDigits = strlen($numberStr);
        for ($i = 0; $i < $countDigits; $i++) {
            if ($numberStr[$i] == $digitStr){
                $count++;
            }
        }
    }
    if ($errorParsing){
        die('не верный формат');
    }
    echo $count;
}