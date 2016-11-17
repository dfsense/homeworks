<?php
/**
 * Created by PhpStorm.
 * User: kovalev
 * Date: 17.11.16
 * Time: 6:03
 */

// Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9
// рядов, а не 5
// 1<br>
// 22<br>
// 333<br>
// 4444<br>
// 55555</p>

for ($i=1; $i<=9; $i++){
    for($j=0; $j<$i; $j++){
        $rowPrint .= $i;
    }
    echo $rowPrint . '</br>';
    unset($rowPrint);
}
