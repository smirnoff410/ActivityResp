<!DOCTYPE html>
<!-- saved from url=(0049)http://bootstrap-v4.ru/examples/narrow-jumbotron/ -->
<html lang="ru">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <link rel="icon" href="img/logo.png" tppabs="http://bootstrap-v4.ru/favicon.ico">

    <title>Активный отдых</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" tppabs="http://bootstrap-v4.ru/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body style="background-image: url(img/fon.jpg);background-size: 100%;">

    <div class="container">
        <?include "header.php"?>

<?php
include("connect.php");
/* Таблица MySQL, в которой хранятся данные */
$table = "feedback";
/* Создаем соединение */
mysql_connect($hostname, $username, $password) or die ("Не могу создать соединение");
/* Выбираем базу данных. Если произойдет ошибка - вывести ее */
mysql_select_db($dbName) or die (mysql_error());
/* Если была нажата кнопка редактирования, вносим изменения */
if(isset($_POST['user_login']) && isset($_POST['mark'])&& isset($_POST['text']) && isset($_POST['id']))
{

    $id = $_POST['id'];
    $name =$_POST['user_login'];
    $mark =$_POST['mark'];
    $text = $_POST['text'];

    $query ="UPDATE `feedback` SET `user_login`='$name', `mark`='$mark' ,`text`='$text' WHERE id='".$_POST['id']."'";
    $result = mysql_query($query) or die("Ошибка " . mysql_error($link));

}
/* Заносим в переменную $res всю базу данных */
$query = "SELECT * FROM `feedback`";
/* Выполняем запрос. Если произойдет ошибка - вывести ее. */


    /* Выполняем запрос. Если произойдет ошибка - вывести ее. */

    $res = mysql_query($query) or die(mysql_error());


       /* Цикл вывода данных из базы конкретных полей */
       echo"<table border=0 style=\"width: 400px;margin: auto;\">";
           echo"<form ACTION=\"edit_feedback.php\" method=\"post\">";
       while ($row = mysql_fetch_array($res)) {



               echo"<tr>";
                   echo"<td>Номер</td>";
                   echo"<td><input required type=\"text\" class=\"form-control\" style=\"background:#3b4148;color:#fff;\" name=\"id\" maxlength=30 size=30 value=\"".$row['id']."\"></td>";
               echo"</tr>";
               echo"<tr>";
                   echo"<td>Имя</td>";
                   echo"<td><input required type=\"text\" class=\"form-control\" style=\"background:#3b4148;color:#fff;\" name=\"user_login\" maxlength=30 size=30 value=\"".$row['user_login']."\"></td>";
               echo"</tr>";
               echo"<tr>";
                   echo"<td>Оценка</td>";
                   echo"<td><input required type=\"text\" class=\"form-control\" style=\"background:#3b4148;color:#fff;\" name=\"mark\" maxlength=30 size=30 value=\"".$row['mark']."\"></td>";
               echo"</tr>";
               echo"<tr>";
                   echo"<td>Текст сообщения</td>";
                   echo"<td><textarea class=\"form-control\" name=\"text\" id=\"exampleTextarea\" style=\"width:400px;\" rows=\"3\">".$row['text']."</textarea> </td>";
               echo"</tr>";
               echo"<tr>";
        echo"<td colspan=2 align=\"center\"><input type=submit name=\"submit_edit\" class=\"btn btn-default reg_btn\" value=\"Отправить\"></td>";
        echo "</tr>\n";

       }

        echo "</table></form>\n\n";
       /* Закрываем соединение */
       mysql_close();
       /* Выводим ссылку возврата */
       echo ("<div style=\"text-align:center; margin-top:10px;\"><a href=\"index.php\">Вернуться
       назад</a></div>");

?>
<?include "footer.php"?>

    </div>
    <!-- /container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

</body>

</html>
