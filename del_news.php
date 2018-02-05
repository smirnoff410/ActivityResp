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

        <h1 style="text-align:center; color:#E64A19; margin: 50px;">Удаление тура</h1>
        <?php
 include("connect.php");
 $table = "news";
 /* Выбираем базу данных. Если произойдет ошибка - вывести ее */
 mysql_select_db($dbName) or die (mysql_error());
 /* Составляем запрос для извлечения данных из полей "name", "email", "theme",
 "message", "data" таблицы "test_table" */

 /* Выполняем запрос. Если произойдет ошибка - вывести ее. */
 $del=$_GET['del'];
 $query = "DELETE FROM {$table} WHERE (Id='{$del}')";
 $res = mysql_query($query) or die(mysql_error());
 /* Если была нажата ссылка удаления, удаляем запись */
  /* Выполняем запрос. Если произойдет ошибка - вывести ее. */
  mysql_query($query) or die(mysql_error());   /* Заносим в переменную $res всю базу данных */
  $query = "SELECT * FROM $table";
  $res = mysql_query($query) or die(mysql_error());
 /* Узнаем количество записей в базе данных */
 $row = mysql_num_rows($res);
 /* Выводим данные из таблицы */
 echo ("
        <table class=\"table table-hover\">
          <thead class=\"thead-default\">
            <tr>
            <th style=\"color:#E64A19;\">Заголовок</th>
            <th style=\"color:#E64A19;\">Полное описание</th>
            <th style=\"color:#E64A19;\">Дата</th>
              <th style=\"color:#E64A19;\">Удаление</th>
            </tr>
          </thead>
          <tbody>");
     /* Цикл вывода данных из базы конкретных полей */
     while ($row = mysql_fetch_array($res)) {
       echo "<tr>";
       echo "<td>".$row['News_head']."</td>";
       echo "<td>".$row['text']."</td>";
      echo " <td>".$row['date']."</td>";
           /* Генерируем ссылку для удаления поля */
           echo "<td><a name=\"del\" href=\"del_news.php?del=".$row['id']."\">Удалить</a></td>\n";
           echo "</tr>\n";
       }
       echo ("</table>\n");
        /* Закрываем соединение */
        mysql_close();   /* Выводим ссылку возврата */
        echo ("<div style=\"text-align:center; margin-top:10px;\"><a href=\"admin.php\">Вернуться назад</a></div>");
        echo(" </body>");
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
