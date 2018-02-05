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
        <div style="margin: 30px;text-align: center">
            <img src="img/logo.png" width="100" height="50" alt="">
            <h1>Выберите активность</h1>
        </div>
        <div class="row">
        <?php
include("connect.php");
$table = "rest_type";


/* Выбираем базу данных. Если произойдет ошибка - вывести ее */
mysql_select_db($dbName) or die (mysql_error());
/* Составляем запрос для извлечения данных из полей "name", "email", "theme",
"message", "data" таблицы "test_table" */
$query = "SELECT  * FROM $table WHERE `id`<4";
/* Выполняем запрос. Если произойдет ошибка - вывести ее. */

$res = mysql_query($query) or die(mysql_error());
/* Выводим данные из таблицы */
while ($row = mysql_fetch_array($res)) {

                      echo"<div class=\"col-xs-6 item\">";
                echo"<form name=\"search\" action=\"search.php\" method=\"post\">";
                    echo"<tr>";
                    echo"<td><img src=".$row['img']."></td>";
                    echo"<td><h1><input required type=\"text\" value=\"".$row['Name']."\"name=\"tour\" readonly/></h1></td>";
                    echo"<td><p>".$row['About']."</p></td>";
                echo"</tr>";
                echo"<button type=\"submit\" class=\"btn btn-primary\" style=\"border: solid 1px #E64A19;background: #E64A19;\">Подробнее</button>";
                echo"</form>";
                echo"</div>";
                }

                mysql_close();
                ?>


</div>
<div class="row">
<?php
include("connect.php");
$table = "rest_type";


/* Выбираем базу данных. Если произойдет ошибка - вывести ее */
mysql_select_db($dbName) or die (mysql_error());
/* Составляем запрос для извлечения данных из полей "name", "email", "theme",
"message", "data" таблицы "test_table" */
$query = "SELECT  * FROM $table WHERE `id`>3";
/* Выполняем запрос. Если произойдет ошибка - вывести ее. */

$res = mysql_query($query) or die(mysql_error());
/* Выводим данные из таблицы */
while ($row = mysql_fetch_array($res)) {

              echo"<div class=\"col-xs-6 item\">";
        echo"<form name=\"comment\" action=\"search.php\" method=\"post\">";
            echo"<tr>";
            echo"<td><img src=".$row['img']."></td>";
            echo"<td><h1><input required type=\"text\" value=\"".$row['Name']."\"name=\"tour\" readonly/></h1></td>";
            echo"<td><p>".$row['About']."</p></td>";
        echo"</tr>";
        echo"<button type=\"submit\" class=\"btn btn-primary\" style=\"border: solid 1px #E64A19;background: #E64A19;\">Подробнее</button>";
        echo"</form>";
        echo"</div>";
        }

        mysql_close();
        ?>


</div>

        <?include "footer.php"?>

    </div>
    <!-- /container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

</body>

</html>
