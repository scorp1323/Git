Задача:
 - есть две переменных, содержащих имя и фамилию соответственно
 - необходимо получить одну строку, кот. будет содержать имя и фамилию  с пробелом

 Для решения необходимо использовать оператор склеивания (конкатенации) -  точка "."
-------------------------
 Решение:
 <?php

$firstName = 'Сергей';
$lastName = 'Таранов';

$fullName = $firstName . ' ' . $lastName;

echo $fullName;
//Выведет: Сергей Таранов