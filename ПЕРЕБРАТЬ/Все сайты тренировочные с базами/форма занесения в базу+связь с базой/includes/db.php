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





$connection = mysqli_connect( '127.0.0.1', 'root', '' , 'veterinarnaja_baza'); 
// подключение к базе с паролем и логином и паролем
// ("127.0.0.1", "my_user", "my_password", "my_db");
//=======================================================

mysqli_set_charset($connection, 'utf8');  
// исправляет баг с русским шрифтом от базы 
//=======================================================

   

// $_GET - переменная = суперглобальный массив (ее создает php)
// - принимает параметры с формы, которые пришли методом GET
//==========================================================
// $_POST - переменная = суперглобальный массив (ее создает php)
// - принимает параметры с формы, которые пришли методом POST

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
