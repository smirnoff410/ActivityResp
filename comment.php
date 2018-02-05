<?php
include("connect.php");
/* Таблица MySQL, в которой будут храниться данные */
$table = "feedback";
/* Создаем соединение */
mysql_connect($hostname, $username, $password) or die ("Не могу создать соединение");
/* Выбираем базу данных. Если произойдет ошибка - вывести ее */
mysql_select_db($dbName) or die (mysql_error());
/* Составляем запрос для вставки информации в таблицу
name...date - название конкретных полей в базе;
в $_POST["test_name"]... $_POST["test_mess"] - в этих переменных содержатся данные,
полученные из формы */
$query = "INSERT INTO `feedback` SET `user_login`='".$_POST['name']."',`Tour`='".$_POST['tour']."',`mark`='".$_POST['mark']."',`text`='".$_POST['comment']."';";

/* Выполняем запрос. Если произойдет ошибка - вывести ее. */
mysql_query($query) or die(mysql_error());
/* Закрываем соединение */
mysql_close();
/* В случае успешного сохранения выводим сообщение и ссылку возврата */
include "feedback.php"
?>
