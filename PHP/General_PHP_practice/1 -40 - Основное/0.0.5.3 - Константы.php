<?php

//Способ-1
define("PI", 3.141592);
$r = 10;
$s = PI * $r * $r;
echo $s;
//Выведет 314.1592

//Способ-2
const NAME1 = 'Vasiya';
echo NAME1;
//Выведет Vasiya
?>
Правила для констант:
 - нет приставки $
 - не могут быть переопределены и анулированы
 - могут иметь только скалярные значения
 - пишут все буквы в ВЕРХНЕМ РЕГИСТРЕ