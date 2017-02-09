<?php

function removeFileResult(){
    if(file_exists("lorem_res.txt")){
        unlink("lorem_res.txt");
    }
}

function checkWords(){
    $file = file_get_contents(MY_FILE_TEXT, FILE_USE_INCLUDE_PATH);
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
}