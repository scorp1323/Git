<?php
//так всегда начинается php код(файл)
//=====================================================
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
// так отображаются все ошибки
//======================================================= 
 


?>
<body>
	<? // Обьявляем переменные для проверки условий
	$userRole = 'admin';
	$userName = 'Sergey';
	?>
	<!-- Используем обычные проверки с помощью IF -->
	<?php if ($userRole == 'admin') : ?>
		<h3>  Добро пожаловать, <?= $userName; ?>!</h3>
		<p> Вы получили права администратора! </p>
	<? elseif ($userRole == 'manager') : ?>
		<h3> Добро пожаловать, <?= $userName; ?> </h3>
		<p>  Вы получили права менеджера! </p>
	<? else : ?>
		<h3> Вы не прошли проверку прав!!!</h3>
	<? endif ; ?>
</body>