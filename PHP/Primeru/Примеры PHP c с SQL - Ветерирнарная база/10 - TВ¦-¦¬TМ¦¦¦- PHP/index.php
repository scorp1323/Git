<?php
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



?>

<form method="POST" action="">
         <input name="last_name" type="text" placeholder="Фамилия" size="20"/>

        <input name="first_name" type="text" placeholder="Имя" size="15"/>
       
        <input type = "text" placeholder="Отчество" name = "middle_name" size="20"><p>

         <input type = "text" placeholder="Телефон_№1" name = "fone_namber_1" size="10">

        <input type = "text" placeholder="Телефон_№2" name = "fone_namber_2" size="10">

        <input type = "text" placeholder="Телефон_№3" name = "fone_namber_3" size="10"><p>

        <input type = "text" placeholder="Viber" name = "viber_namber" size="10">

        <input type = "text" placeholder="E-mail" name = "e_mail" size="10">


        <input type = "text" placeholder="Город" name = "citi" size="10"><p>





        
        <input type="submit" value="Сохранить"/>
        <input type="reset" name="reset" value="Очистить">
    </form>

















<?php

//=========================================================
                 // Формы
//-------------------------------------------------------


// МЕНЯЕМ ТУТ!!!
//isset — Определяет, была ли установлена переменная значением отличным от NULL
if (isset($_POST['first_name'])
    && isset($_POST['last_name'])

    && isset($_POST['middle_name'])

    && isset($_POST['fone_namber_1'])

    && isset($_POST['fone_namber_2'])

    && isset($_POST['fone_namber_3'])

    && isset($_POST['viber_namber'])

    && isset($_POST['e_mail'])

    && isset($_POST['citi'])


){
 




 // МЕНЯЕМ ТУТ!!!
    // Переменные с формы
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $middle_name = $_POST['middle_name'];
    $fone_namber_1 = $_POST['fone_namber_1'];
    $fone_namber_2 = $_POST['fone_namber_2'];
    $fone_namber_3 = $_POST['fone_namber_3'];
    $viber_namber = $_POST['viber_namber'];
    $e_mail = $_POST['e_mail'];
    $citi = $_POST['citi'];





    // Параметры для подключения
    $db_host = "127.0.0.1"; 
    $db_user = "root"; // Логин БД
    $db_password = ""; // Пароль БД
    $db_table = "customers"; // Имя Таблицы БД
     
    // Подключение к базе данных
    $db = mysql_connect($db_host,$db_user,$db_password) 
        OR DIE("Не могу создать соединение ");
     
    // Выборка базы
    mysql_select_db("veterinarnaja_baza",$db);
     
    // Установка кодировки соединения
    mysql_query("SET NAMES 'utf8'",$db);







     // МЕНЯЕМ ТУТ - 2 РАЗА!!!
    $result = mysql_query ("INSERT INTO ".$db_table." (first_name,last_name,middle_name,fone_namber_1,fone_namber_2,fone_namber_3,viber_namber,e_mail,citi)



     VALUES ('$first_name','$last_name','$middle_name','$fone_namber_1','$fone_namber_2','$fone_namber_3','$viber_namber','$e_mail','$citi')");





    
     
    if ($result = 'true'){
        echo "Информация занесена в базу данных";
    }else{
        echo "Информация не занесена в базу данных";
    }
}







?>
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>