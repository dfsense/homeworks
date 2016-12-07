<?php
require_once ("constants.php");

if (isset($_POST['delete']) && isset($_POST['numChar']) && $_POST['delete'] == 'true'){
    $file = file_get_contents(FILE_TEXT);
    $arrFile = mb_split(" ", $file);
    foreach ($arrFile as $index => $value) {
        rtrim($value);
        $count = iconv_strlen($value);
        $ch = $value[$count-1];
        if ($ch === '.' || $ch === ',' || $ch === '?' || $ch === '!' ){
            $count--;
        }
        if ($count > $_POST['numChar']){
            unset($arrFile[$index]);
        }
    }
    ksort($arrFile);
    $str = implode($arrFile, " ");
    file_put_contents(FILE_TEXT_RESULT, $str);
    die();
}
