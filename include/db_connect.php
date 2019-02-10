<?php
	$link = new mysqli('localhost', 'admin', '', 'db_foods');
	if (mysqli_connect_error()) {
		 die('Ошибка подключения'. mysqli_connect_error());
	} 
	mysqli_set_charset($link, "utf8");
?>
