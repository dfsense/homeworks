<?php
/**
 * Created by PhpStorm.
 * User: kovalev
 * Date: 17.11.16
 * Time: 6:09
 */

// Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.<br><br>
// xx<br>
// xxxx<br>
// xxxxxx<br>
// xxxxxxxx<br>
// xxxxxxxxxx</p>

$i=1;
while ($i <= 5){
    $rowPrint .= 'xx';
    echo $rowPrint . '</br>';
    $i++;
}