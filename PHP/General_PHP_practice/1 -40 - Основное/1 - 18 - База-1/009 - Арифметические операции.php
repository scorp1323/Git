АРИФМЕТИЧЕСКИЕ ОПЕРАЦИИ:
Пример  Название   Результат
+$a     Идентичность     Конвертация $a в int или float
-$a     Отрицание        Смена знака $a
$a+$b   Сложение         Сумма $a и $b
$a-$b   Вычитание        Разность $a и $b
$a*$b   Умножение        Произведение $a и $b
4a/$b   Деление          Частное деление $a на $b
$a%$b   / по модулю      Целочисл. остаток от / $a на $b
$a**$b  Возв. в степень  Возведение $a в степень $b


<?php
$a = '12FA';$b = -$a;
echo $b;
//выведет -12;
//конвертирует '12FA' в int=12 и меняет знак на '-'


$a = 22;
$b = 6;
echo $a%$b;
//выведет 4 - это отсток от деления по модулю