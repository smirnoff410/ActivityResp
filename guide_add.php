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

        <h1 style="text-align:center; color:#E64A19; margin: 50px;">Добавление гида</h1>
        <form action="save_guide.php" method="post" name="test_form">
            <table class="table table-hover">
              <thead class="thead-default">
         <tr>
         <th style="color:#E64A19;">Изображение</th>
         <td><input required type="text" name="img" maxlength="30" style="width:400px;" placeholder="img/..."/></td>
         </tr>
         <th style="color:#E64A19;">ФИО</th>
         <td><input required type="text" name="FIO" maxlength="30" style="width:400px;"/></td>
         </tr>
         <th style="color:#E64A19;">Специализация</th>
         <td><input required type="text" name="Type" maxlength="30" style="width:400px;"/></td>
         </tr>
         <tr>
          <tr>
         <th style="color:#E64A19;">Стаж работы</th>
         <td><input required type="text" name="Staj" maxlength="30" style="width:400px;"/></td>
         </tr>
         <tr>
        <th style="color:#E64A19;">Номер телефона</th>
        <td><input required type="text" name="Telnum" maxlength="30" style="width:400px;" placeholder="+7-XXX-XXX-XX-XX"/></td>
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
