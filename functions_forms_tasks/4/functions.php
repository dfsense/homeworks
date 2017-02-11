<?php

function listFiles($dir){
    if ($dir[strlen($dir)-1] !== '/'){
        $dir .= '/';
    }
    $files = scandir($dir);
    if ($files){
        foreach ($files as $key => $val){
            if (is_dir($val)){
                unset($files[$key]);
            }else{
                $filesIn = scandir($dir.$val."/");
//                echo $dir.$val."/";
//                var_dump($filesIn);
//                die();
                if ($filesIn){
                    unset($files[$key]);
                }
            }
        }
        ksort($files);
    }
    return $files;
}