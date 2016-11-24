<?php
/**
 * Created by PhpStorm.
 * User: kovalev
 * Date: 23.11.16
 * Time: 11:34
 */

// Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его.
// Все добавленные комментарии выводятся над текстовым полем.

require ("functions.php");

if (!isset($_COOKIE['arrComment'])){
    echo 'комментариев пока нет</br>';
    setcookie("arrComment", serialize(array()));
}

foreach (unserialize($_COOKIE['arrComment']) as $el){
    $html .= $el . '</br>';
}

$html .= '<form action="7.php" method="post">
            <textarea rows="3" cols="50" name="comment"></textarea>
            <input type="submit" value="Отправить"></br>
         </form>';
echo $html;

if (empty($_POST["comment"])){
    die();
}
addComment($_POST["comment"]);
header("Refresh:0");

