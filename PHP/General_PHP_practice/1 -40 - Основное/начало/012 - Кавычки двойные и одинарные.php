Основная разница между '' и "" в том, что текст в '' воспринимается просто как текст, а текст в "" может выполнятся, если в нем есть переменные.
Поетому текст в '' выполняется быстрее, чем в "" - интерпретатор ищет переменные в тексте с "",  не ищет их  в тексте с ''.
-------------------------
Пример:
<?php
$name = 'Сергей';

echo '$name пошел гулять', '<br>';
//Выведет просто как текст

echo "$name пошел гулять";
//подставит вместо $name ее значение
?>
Выведет:
$name пошел гулять
Сергей пошел гулять