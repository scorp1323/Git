<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
// так отображаются все ошибки
//======================================================= 
//Локальная область видимости

//глобальная переменная $a
$a = 1;

//ф-я test() обьявляет локальную переменную $a и выводит ее
function test($name = 'Sergey'){
	$a = 2;
	echo $a;
}

test(); // выполняем ф-ю test() - выведет 2 - знач. локальной переменной $a
echo '<br>';

echo $a; // выведет 1 - знач. глобальной переменной $a
echo '<br>';

// выведет ошибку - переменная локальна для ф-ии и не определена глобально:
echo $name;