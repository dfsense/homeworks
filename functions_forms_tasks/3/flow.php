<?php
require_once ("constants.php");
require_once ("functions.php");

if (isset($_POST['delete']) && isset($_POST['numChar']) && $_POST['delete'] == 'true'){
    removeFileResult();
    checkWords();
    die();
}
