<?php
include "../exercise/functions.php";

//exercise1([1,2,3],false);
//echo exercise2('/', '75,25,0');
//echo exercise3(5, -5);
/**
 * Задание #4

Выведите информацию о текущей дате в формате 31.12.2016 23:59
Выведите unixtime время соответствующее 24.02.2016 00:00:00.
 */

date_default_timezone_set('asia/Yakutsk');
echo date('d.m.Y H:i');
echo '<br>';
echo strtotime("24.02.2016 00:00:00");
echo '<br>';
echo date('Y-m-d H:i:s', 1456239600);
echo '<br>';

/**
 * Задание #5

Дана строка: “Карл у Клары украл Кораллы”. Удалить из этой строки все заглавные буквы “К”.
Дана строка: “Две бутылки лимонада”. Заменить “Две”, на “Три”.
 */
$string = 'Карл у Клары украл Кораллы';
echo str_replace('К', '', $string);
echo '<br>';
$string = 'Две бутылки лимонада';
echo str_replace('Две', 'Три', $string);
echo '<br>';

/**
 * Задание #6

Создайте файл test.txt средствами PHP. Поместите в него текст - “Hello again!”
Напишите функцию, которая будет принимать имя файла, открывать файл и выводить содержимое на экран.
 */

$text = 'Hello again!';
$fp = fopen("test.txt", "w");
fwrite($fp, $text);
echo $text;
fclose($fp);