<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
// так отображаются все ошибки
//============================
// ООП - КЛАССы
?>
 
Для обьявления КЛАССа необх. спец. слово (с малой буквы), 
	после кот. следует название класса с большой буквы.
	Если назв. класса состоит из нескольких слов, ипс. CamelCase.
Далее необх. создать екземпляры класса с помощью спец.слова new и имени класса, обьект которого необходимо создать.

class Car { }
	$car1 = new Car;
	$car2 = new Car;
	$car3 = new Car;

var_dump ($car1);   // object(Car)#1 (0) { } - пустой класс Car

Члены класса - методамы и свойства класса.

