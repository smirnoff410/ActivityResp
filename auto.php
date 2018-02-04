<?php include ('connect.php'); ?>
<?
if(isset($_POST["pass"]))
{
	$pass = $_POST["pass"];
	$login = $_POST["login"];

	$strSQL1 = "SELECT * FROM `Пользователь` WHERE `Логин` = '".$login."' AND `Пароль` = '".$pass."' ";

	$result1 = mysql_query($strSQL1) or die ("не могу выполнить зарпрос!");

	if($row=mysql_fetch_array($result1))
	{
		$start=session_start();
		$_SESSION["log"] = $row["Фамилия"]." ".$row["Имя"];
		$_SESSION["role"] = $row["Роль"];
		$_SESSION["id"] = $row["id"];
		$success = true;

	}
	else
	{
		$message = "<script>alert(\"Такого логина не существует!!!\");</script>";
		$success = false;

	}

	mysql_close();

	print $message;


}
?>
<?php include "index.php"; ?>
