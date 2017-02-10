<?php
require_once ("functions.php");

if (isset($_POST['dir']) && !empty($_POST['dir'])){
    $dir = $_POST['dir'];
    $files = listFiles($dir);
    $html = "<table>";
    foreach ($files as $val){
        $html .= "<tr><td>$val</td></tr>";
    }
    $html .= "</table>";
    die($html);
}