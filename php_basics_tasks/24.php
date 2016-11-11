<?php
/**
 * Created by PhpStorm.
 * User: kovalev
 * Date: 11.11.16
 * Time: 4:17
 */

// Создайте в файле 3 комментария тремя разными типами.

$someText = "Белеет парус одинокий";

// вывод текста с помощью echo
echo "Вывод с помощью echo: {$someText}</br>";

/*
 * вывод текста с помощью функции print_r()
 */
print_r("Вывод с помощью print_r: {$someText}</br>");

 # вывод текста с помощью функции print()
print("Вывод с помощью print(): {$someText}");