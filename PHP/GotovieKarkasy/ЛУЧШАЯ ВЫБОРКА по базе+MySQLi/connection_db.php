<?php

// Файл firstsql.php



$host='127.0.0.1'; // имя хоста (уточняется у провайдера)
//=======================
$database='veterinarnaja_baza'; // имя базы данных, которую вы должны создать
$user='root'; // заданное вами имя пользователя, либо определенное провайдером
$pswd=''; // заданный вами пароль



//============================
$connection = mysqli_connect( $host, $user, $pswd , $database); 
// подключение к базе с хостом,юзером, паролем и логином
// ("127.0.0.1", "my_user", "my_password", "my_db");
//=======================================================

mysqli_set_charset($connection, 'utf8');  
// исправляет баг с русским шрифтом от базы 
//=======================================================

   if($connection == false)    //если(if) подключение(connection) не удалось\ошибка (false)
   {
      echo 'Нет связи с базой - Сережа НЕмолодец :(<br>';  //вывести на экран "Нет связи с базой..."
      echo mysqli_connect_error();  //вывести на екран ошибку SQLсоединения с расшифровкой
      exit(); //выход из соединения
   }     
   else //иначе
   {
      echo 'Есть связь с базой - Сережа МОЛОДЕЦ!!!<br><hr><br>'; //вывести на экран "Есть связь с базой..."
   }  



mysqli_select_db($connection, $database)
	 or die("Не могу подключиться к базе.");
//выбрать с имеющихся баз базу данных(результат соединения, имя базы, к которой необходимо соединиться) 