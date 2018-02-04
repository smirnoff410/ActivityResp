<?

$hostname = "localhost";
$username = "root";
$password = "";
$dbName = "activerest";

//соединяемся с базой данных (сервером)
$link = mysql_connect($hostname, $username, $password);


if (!$link) // Если дескриптор равен 0 соединение не установлено
{
	echo("<center><p>В настоящий момент сервер базы данных не
         доступен, поэтому корректное отображение страницы
         невозможно.</p></center>");
	exit();
}
else
{
	//echo "<center>Подключение к MySQL установлено</center>";
}

if (!@mysql_select_db($dbName, $link))
{
	echo( "<center><p>В настоящий момент база данных не доступна,
          поэтому корректное отображение страницы невозможно.</p></center>" );
	exit();
}
?>
