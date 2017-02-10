<!-- Написать функцию, которая выводит список файлов в заданной директории.
    Директория задается как параметр функции.
-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="4.php" method="post">
        <input type="text" name="dir" placeholder="only linux style path">
        <input type="submit">
    </form>
</body>
</html>
<?php
require_once ("flow.php");