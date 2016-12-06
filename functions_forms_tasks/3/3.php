<!--
 Есть текстовый файл. Необходимо удалить из него все слова, длина которых превыщает N символов.
 Значение N задавать через форму. Проверить работу на кириллических строках - найти ошибку, найти решение.
-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <p>Форма для удаления всех слов, длина которых превыщает N символов</p>
    <form action="3.php" method="post">
        <input type="text" name="numChar">
        <input type="submit" value="Удалить">
        <input type="hidden" name="delete" value="true">
    </form>
</body>
</html>

<?php
if (isset($_POST['delete']) == 'true'){
    $file = file("lorem.txt", FILE_IGNORE_NEW_LINES);
    foreach ($file as $value) {
        $arrFile = mb_split("", $file);
    }
//    mb_split("", $file);
    echo 'yahoo';
}



