<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
// так отображаются все ошибки
//=================================================
// Языковые конструкции:
// В отличие от ф-й, можно вызывать без ()

// echo  &  print
// return
// die  & exit
// isset  & unset
// include  & include_once
// require  & require_once
// empty
// eval
// list


//empty() — Проверяет, пуста ли переменная
//фактически является точным эквивалентом конструкции !isset($var) || $var == false
$var = 0;

// Принимает значение true, потому что $var пусто
if (empty($var)) {
    echo '$var или 0, или пусто, или вообще не определена';
}
echo '<br>';

// Принимает значение true, потому что $var определена
if (isset($var)) {
    echo '$var определена, даже если она пустая';
}
	echo '<hr>';
//===================================
// eval() — Выполняет код PHP, содержащейся в строке
$a = 16;
$b = 38;
	
eval("\$c = \$a + \$b;");
	echo $c;  // 54
echo '<br>';
//===============================
$string = 'чашка';
$name = 'кофе';
$str = 'Это $string с моим $name.';

echo $str. "<br>"; // Это $string с моим $name.

eval("\$str = \"$str\";");
echo $str. "\n";  // Это чашка с моим кофе.

echo '<hr>';
//=============================
//list() — Присваивает переменным из списка значения подобно массиву

$info = ['кофе', 'коричневый', 'кофеин'];

// Составить список всех переменных
list($drink, $color, $power) = $info;
echo "$drink - $color, а $power делает его особенным.<br>";
// кофе - коричневый, а кофеин делает его особенным.

// Составить список только некоторых из них
list($drink, , $power) = $info;
echo "В $drink есть $power.<br>";
// В кофе есть кофеин.

// Или пропустить все, кроме третьей
list( , , $power) = $info;
echo "Мне нужен $power!<br>";
// Мне нужен кофеин!