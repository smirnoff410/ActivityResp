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

        <h1 style="text-align:center; color:#E64A19; margin: 50px;">Последние туры</h1>
        <table class="table table-hover">
          <thead class="thead-default">
            <tr>
              <th style="color:#E64A19;">Изображение</th>
              <th style="color:#E64A19;">Город</th>
              <th style="color:#E64A19;">О туре</th>
              <th style="color:#E64A19;">Вид тура</th>
              <th style="color:#E64A19;">Гид</th>
              <th style="color:#E64A19;">Цена</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row"><img width="200" src="img/dayving.jpg"</th>
              <td>Сочи</td>
              <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
              <td>Экстримальный</td>
              <td>Иванов Иван Иванович</td>
              <td>2000р.</td>
            </tr>
            <tr>
              <th scope="row"><img width="200" src="img/dayving.jpg"</th>
              <td>Сочи</td>
              <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
              <td>Экстримальный</td>
              <td>Иванов Иван Иванович</td>
              <td>2000р.</td>
            </tr>
          </tbody>
        </table>

        <h1 style="text-align:center; color:#E64A19; margin: 50px;">Новости</h1>

        <table class="table table-hover">
          <thead class="thead-default">
            <tr>
              <th style="color:#E64A19;">Заголовок</th>
              <th style="color:#E64A19;">Полное описание</th>
              <th style="color:#E64A19;">Дата</th>
              <th style="color:#E64A19;">Источник</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Новость №1</td>
              <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
              <td>04.02.2018</td>
              <td>Проверенный источник</td>
            </tr>
          </tbody>
        </table>


        <!-- <?php
 include("connect.php");
 $table = "tours";
 /* Выбираем базу данных. Если произойдет ошибка - вывести еaе */
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
              <th style=\"color:#E64A19;\">Изображение</th>
              <th style=\"color:#E64A19;\">Город</th>
              <th style=\"color:#E64A19;\">О туре</th>
              <th style=\"color:#E64A19;\">Вид тура</th>
              <th style=\"color:#E64A19;\">Гид</th>
              <th style=\"color:#E64A19;\">Цена</th>
            </tr>
          </thead>
          <tbody>");
          while ($row = mysql_fetch_array($res)) {
            echo "<tr>";
              echo "<th scope=\"row\"><img width=\"200\" src=".$row['img']."></th>";
              echo "<td>".$row['City']."</td>";
             echo " <td>".$row['About']."</td>";
              echo "<td>".$row['Type']."</td>";
              echo "<td>".$row['Guide']."</td>";
              echo "<td>".$row['Cost']."</td>";
            echo "</tr>";
        }
          echo "</tbody>";
        echo "</table>";
?> -->

<?include "footer.php"?>

    </div>
    <!-- /container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

</body>

</html>
