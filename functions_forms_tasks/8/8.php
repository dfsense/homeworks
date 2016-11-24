<?php
/**
 * Created by PhpStorm.
 * User: kovalev
 * Date: 24.11.16
 * Time: 5:19
 */

// Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его.
// Все добавленные комментарии выводятся над текстовым полем.
// Реализовать проверку на наличие в тексте запрещенных слов, матов.
// При наличии таких слов - выводить сообщение "Некорректный комментарий".
// Реализовать удаление из комментария всех тегов, кроме тега &lt;b&gt;

require ("functions.php");

if (!isset($_COOKIE['arrComment'])){
    echo 'комментариев пока нет</br>';
    setcookie("arrComment", serialize(array()));
}

foreach (unserialize($_COOKIE['arrComment']) as $el){
    $html .= $el . '</br>';
}

$html .= '<form action="8.php" method="post">
            <textarea rows="3" cols="50" name="comment"></textarea>
            <input type="submit" value="Отправить"></br>
         </form>';
echo $html;

if (empty($_POST["comment"])){
    die();
}
$str = checkMats($_POST["comment"]);
if ($str != 'Некорректный комментарий'){
    $str = delSomeSpecSymbols($str);
}
addComment($str);
header("Refresh:0");