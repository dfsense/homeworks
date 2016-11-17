<?php
/**
 * Created by PhpStorm.
 * User: kovalev
 * Date: 17.11.16
 * Time: 5:53
 */

// Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20
// рядов, а не 5.
// x<br>
// xx<br>
// xxx<br>
// xxxx<br>
// xxxxx</p>


for ($i=0; $i<=20; $i++){
    $rowPrint .= 'x';
    echo $rowPrint . '</br>';
}