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
    <form action="3.php" method="POST">
        <input type="text" name="numChar">
        <input type="submit" value="Удалить">
        <input type="hidden" name="delete" value="true">
    </form>
</body>
</html>

<?php

require_once ("functions.php");



