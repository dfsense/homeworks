<?php
/**
 * Created by PhpStorm.
 * User: kovalev
 * Date: 10.11.16
 * Time: 4:55
 */

// Заданы две переменные:
// distance - длина участка, который проехал автомобиль;
// time - время движения в часах.
// Вывести скорость автомобиля на заданном участке в км/час и в м/сек.

$distance = 1000; // (km)
$time = 12; // (hour)

$speedMS = ($distance * 1000) / ($time * 60 * 60);
$speedKmH = $distance / $time;

echo "Автомобиль ехал со скоростью: {$speedKmH} км/час или {$speedMS} м/сек";