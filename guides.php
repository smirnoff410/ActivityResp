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

        <h1 style="text-align:center; color:#E64A19; margin: 50px;">Наши гиды</h1>
        <?php
 include("connect.php");
 $table = "guides";
 /* Выбираем базу данных. Если произойдет ошибка - вывести ее */
 mysql_select_db($dbName) or die (mysql_error());
 /* Составляем запрос для извлечения данных из полей "name", "email", "theme",
 "message", "data" таблицы "test_table" */
 $query = "SELECT  * FROM $table";
 /* Выполняем запрос. Если произойдет ошибка - вывести ее. */

 $res = mysql_query($query) or die(mysql_error());
 /* Выводим данные из таблицы */
 echo ("
        <table class=\"table table-hover\">
          <thead class=\"thead-default\">
            <tr>
              <th style=\"color:#E64A19;\">Фото</th>
              <th style=\"color:#E64A19;\">ФИО</th>
              <th style=\"color:#E64A19;\">Специальность</th>
              <th style=\"color:#E64A19;\">Стаж работы</th>
              <th style=\"color:#E64A19;\">Телефон</th>
            </tr>
          </thead>
          <tbody>");
          while ($row = mysql_fetch_array($res)) {
            echo "<tr>";
              echo "<th scope=\"row\"><img width=\"200\" src=".$row['img']."></th>";
              echo "<td>".$row['FIO']."</td>";
             echo " <td>".$row['Type']."</td>";
              echo "<td>".$row['Staj']."</td>";
              echo "<td>".$row['Telnum']."</td>";
            echo "</tr>";
        }
          echo "</tbody>";
        echo "</table>";
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
