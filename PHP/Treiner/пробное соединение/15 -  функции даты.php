<?
//так всегда начинается php код(файл)
//=====================================================

header('Content-Type: text/html; charset=utf-8');
// теперь можно писать на русском без кракозяблов
//======================================================

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
// так отображаются все ошибки
//=======================================================

$connection = mysqli_connect( '127.0.0.1', 'root', '' , 'test_db'); 
// подключение к базе с паролем и логином и паролем
// ("127.0.0.1", "my_user", "my_password", "my_db");
//=======================================================

mysqli_set_charset($connection, 'utf8');  
// исправляет баг с русским шрифтом от базы 
//=======================================================

   if($connection == false)  
   {
      echo 'Нет связи с базой - Сережа НЕмолодец :(<br>';
      echo mysqli_connect_error();
      exit();
   }     
   else 
   {
      echo 'Есть связь с базой - Сережа МОЛОДЕЦ!!!<br><hr><br>';
   }  

//=========================================================
              //    Даты и Время
   //Дата основания эпохи UNIX - 1970.01.01
//---------------------------------------------------------
echo time();
// выведет   1500051384  секунд от момента основания Линукс до настоящего времени
echo '<hr>';
//--------------------------------------------
$start_date = '2016-12-10 14:00:00';
//какая-то дата (любая)
$start_date_timestamp = strtotime($start_date);
//перевод любой даты в формат timestamp - php сам понимает формат даты

echo $start_date_timestamp . '<br/>';
// выводим 

echo time ();
echo '<hr>';
//----------------------------
echo time() - $start_date_timestamp;
echo '<hr>';
//---------------------------
$diff = time() - $start_date_timestamp;
//присваиваем переменной diff время сейчас минус разница 
echo ( ($diff / 60) /60 ) / 24;
// переводим разницу в дни
// выведет дней от даты (216 дней)
echo '<hr>';
//-------------------------------------
$days_passed = floor(  ( ($diff / 60) /60 ) / 24);


echo 'Между ' . date('Y.m.d H : i ', $start_date_timestamp) .  '&nbsp' . 'и'  . ' &nbsp' .   date('Y.m.d H : i ') .' &nbsp' . 'прошло' .' &nbsp' . $days_passed . 'дня/дней';
// &nbsp = символ пробела, не печатается в Html :)