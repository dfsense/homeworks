<?php

function removeFileResult(){
    if(file_exists("lorem_u.txt")){
        unlink("lorem_u.txt");
    }
}