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

        <h1 style="text-align:center; color:#E64A19; margin: 50px;">Добавление тура</h1>
        <form action="save_tour.php" method="post" name="test_form">
            <table class="table table-hover">
              <thead class="thead-default">
         <tr>
         <th style="color:#E64A19;">Изображение</th>
         <td><input required type="text" name="img" maxlength="30" style="width:400px;" placeholder="img/..."/></td>
         </tr>
         <th style="color:#E64A19;">Название тура</th>
         <td><input required type="text" name="Name_tour" maxlength="30" style="width:400px;"/></td>
         </tr>
         <th style="color:#E64A19;">Город</th>
         <td>

         <?php
         include("connect.php");
         $table = "cities";
         /* Выбираем базу данных. Если произойдет ошибка - вывести ее */
         mysql_select_db($dbName) or die (mysql_error());
         /* Составляем запрос для извлечения данных из полей "name", "email", "theme",
         "message", "data" таблицы "test_table" */
         $query = "SELECT  Name FROM $table";
         /* Выполняем запрос. Если произойдет ошибка - вывести ее. */
         $res = mysql_query($query) or die(mysql_error());
         /* Выводим данные из таблицы */

         /* Цикл вывода данных из базы конкретных полей */
         echo '<select name="City_name" style="width:400px; height: 30px;">\n';
         while ($row = mysql_fetch_array($res)) {
         echo "<option>".$row['Name']."</option>\n";
         }
         echo "</select>\n";

         /* Закрываем соединение */
         mysql_close();

         ?>
         </td>
         </tr>
         <tr>
          <tr>
         <th style="color:#E64A19;">О туре</th>
         <td><textarea class="form-control" name="about_tour" id="exampleTextarea" style="width:400px;" rows="3"></textarea></td>
         </tr>
         <tr>
        <th style="color:#E64A19;">Тип отдыха</th>
        <td>

              <?php
              include("connect.php");
              $table = "rest_type";
              /* Выбираем базу данных. Если произойдет ошибка - вывести ее */
              mysql_select_db($dbName) or die (mysql_error());
              /* Составляем запрос для извлечения данных из полей "name", "email", "theme",
              "message", "data" таблицы "test_table" */
              $query = "SELECT  Name FROM $table";
              /* Выполняем запрос. Если произойдет ошибка - вывести ее. */
              $res = mysql_query($query) or die(mysql_error());
              /* Выводим данные из таблицы */

              /* Цикл вывода данных из базы конкретных полей */
              echo '<select name="Rest_name" style="width:400px; height: 30px;">\n';
              while ($row = mysql_fetch_array($res)) {
              echo "<option>".$row['Name']."</option>\n";
              }
              echo "</select>\n";

              /* Закрываем соединение */
              mysql_close();

              ?>
        </td>
        </tr>
          <tr>
         <th style="color:#E64A19;">Гид</th>
         <td>
             <?php
             include("connect.php");
             $table = "guides";
             /* Выбираем базу данных. Если произойдет ошибка - вывести ее */
             mysql_select_db($dbName) or die (mysql_error());
             /* Составляем запрос для извлечения данных из полей "name", "email", "theme",
             "message", "data" таблицы "test_table" */
             $query = "SELECT  FIO FROM $table";
             /* Выполняем запрос. Если произойдет ошибка - вывести ее. */
             $res = mysql_query($query) or die(mysql_error());
             /* Выводим данные из таблицы */

             /* Цикл вывода данных из базы конкретных полей */
             echo '<select name="FIO_name" style="width:400px; height: 30px;">\n';
             while ($row = mysql_fetch_array($res)) {
             echo "<option>".$row['FIO']."</option>\n";
             }
             echo "</select>\n";

             /* Закрываем соединение */
             mysql_close();

             ?>
         </td>
         </tr>
         <tr>
        <th style="color:#E64A19;">Цена</th>
        <td><input required type="text" name="cost" maxlength="30" style="width:400px;"/></td>
        </tr>

         <tr>
         <td colspan="2" align="center">
         <button type="submit" class="btn btn-primary" style="border: solid 1px #E64A19;background: #E64A19;">Добавить</button>
         </td>
         </tr>
         </table>
         </form>

<?include "footer.php"?>

    </div>
    <!-- /container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

</body>

</html>
