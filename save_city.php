<?php
include("connect.php");
/* Таблица MySQL, в которой будут храниться данные */
$table = "cities";
/* Создаем соединение */
mysql_connect($hostname, $username, $password) or die ("Не могу создать соединение");
/* Выбираем базу данных. Если произойдет ошибка - вывести ее */
mysql_select_db($dbName) or die (mysql_error());
/* Составляем запрос для вставки информации в таблицу
name...date - название конкретных полей в базе;
в $_POST["test_name"]... $_POST["test_mess"] - в этих переменных содержатся данные,
полученные из формы */
$query = "INSERT INTO `cities` SET `Name`='".$_POST['Name']."',`Country`='".$_POST['Country']."',`Department`='".$_POST['Department']."';";

/* Выполняем запрос. Если произойдет ошибка - вывести ее. */
mysql_query($query) or die(mysql_error());
/* Закрываем соединение */
mysql_close();
/* В случае успешного сохранения выводим сообщение и ссылку возврата */
echo ("<div style=\"text-align: center; margin-top: 10px;\">
<font color=\"green\">Город добавлен!</font>
<a href=\"tour_add.php\">Вернуться назад</a></div>");
?>
