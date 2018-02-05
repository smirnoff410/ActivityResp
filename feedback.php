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
            <h1>Отзывы</h1>
        </div>

                <div class="feedback-wrapper">
                    <div style="display:flex; flex-direction: column;">
         <?php
        include("connect.php");
        $table = "feedback";
        /* Выбираем базу данных. Если произойдет ошибка - вывести ее */
        mysql_select_db($dbName) or die (mysql_error());
        /* Составляем запрос для извлечения данных из полей "name", "email", "theme",
        "message", "data" таблицы "test_table" */
        $query = "SELECT  * FROM $table";
        /* Выполняем запрос. Если произойдет ошибка - вывести ее. */

        $res = mysql_query($query) or die(mysql_error());
        while ($row = mysql_fetch_array($res)) {

        echo "<div class=\"feedback\">";
            echo "<h1 style=\"text-align:center;color:#E64A19;\">Название тура: ".$row['Tour']."</h1>";
            echo "<div class=\"feedback-content\">";
                echo "<p style=\"color:blue;font-weight:bold;\">Имя: <span style=\"color:#000;\">".$row['user_login']."</span></p>";
                echo "<div>";
                    echo "<p style=\"color:blue;font-weight:bold;\">Оценка: <span style=\"color:#000;\">".$row['mark']."</span></p>";
                    echo "<p style=\"color:blue;font-weight:bold;\">Комментарий: <span style=\"color:#000;\">".$row['text']."</span></p>";
                echo "</div>";
            echo "</div>";
            echo "</div>";


                 }
                ?>
</div>

        <form class="feedback-form" name="comment" action="comment.php" method="post">
            <div class="form-group">
                <label for="formGroupExampleInput">Имя</label>
                <input type="text" class="form-control" name="name" id="formGroupExampleInput" placeholder="Ваше имя">
              </div>
              <div class="form-group">
                  <label for="formGroupExampleInput">Название тура</label>
                  <td>
       <?php
    include("connect.php");
    $table = "tours";
    /* Выбираем базу данных. Если произойдет ошибка - вывести ее */
    mysql_select_db($dbName) or die (mysql_error());
    /* Составляем запрос для извлечения данных из полей "name", "email", "theme",
    "message", "data" таблицы "test_table" */
    $query = "SELECT  Name_tour FROM $table";
    /* Выполняем запрос. Если произойдет ошибка - вывести ее. */
    $res = mysql_query($query) or die(mysql_error());
    /* Выводим данные из таблицы */

    /* Цикл вывода данных из базы конкретных полей */
    echo '<select name="tour" required style="width:400px; height: 30px;"   >\n';
    while ($row = mysql_fetch_array($res)) {
    echo "<option>".$row['Name_tour']."</option>\n";
    }
    echo "</select>\n";

    /* Закрываем соединение */
    mysql_close();

    ?>
</td>

                </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Оценка</label>
                <input type="text" class="form-control" name="mark" id="formGroupExampleInput" placeholder="Плохо, хорошо, отлично">
              </div>
              <div class="form-group">
              <label for="exampleTextarea">Комментарий</label>
              <textarea class="form-control" name="comment" id="exampleTextarea" rows="3"></textarea>
            </div>

            <div align="center">
                <button type="submit" class="btn btn-primary" style="border: solid 1px #E64A19;background: #E64A19;">Отправить</button>
            </div>
        </form>
</div>
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
