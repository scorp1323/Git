 <?php
    $value='jfFfhf55555kdjd89';
$val = preg_replace('/[^0-9]/', '', $value);
echo $val;
?>

<!-- убирает все со строки, кроме цыфр.
	результат - 5555589  -->

<!-- =========================================== -->
<?php


mysqli_num_rows();
# - Возвращает число рядов в результирующей выборке.
#-------------------------------------------------------





int rand ( int $min , int $max )
$min - # Наименьшее значение, которое может быть возвращено (по умолчанию: 0)
$max - # Наибольшее значение, которое может быть возвращено (по умолчанию: getrandmax())
       # d Windows getrandmax()  = всего лишь 32767
#----------------------------------------------------------------------------

var_dump($expression) # Выводит информацию о переменной
# var_dump($a)
# var_dump($a > $b)


#$=================================================

array_keys(input);
# выводит все ключи заданного массива в виде другого массива

#==================================================
$arr = ['Москва', 'Париж', 'Лондон', 'Минск', 'Пекин', 'Киев'];
echo count($arr);
# выведет 6 - кол-во елементов массива

