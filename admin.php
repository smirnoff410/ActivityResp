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

        <h1 style="text-align:center; color:#E64A19; margin: 50px;">Страница администратора</h1>
        <div class="box">

               <div><input type="button" style="padding:5px 15px; background:#E64A19; border:0 none;
                   cursor:pointer;
               	color: #fff;
                   -webkit-border-radius: 5px;
                   border-radius: 5px;
                   margin: 5px;
                   display:inline;" name="4" value="Добавить Тур" onClick='location.href="tour_add.php"'></div>

              <div><input type="button"style="padding:5px 15px; background:#E64A19; border:0 none;
                  cursor:pointer;
                  color: #fff;
                  -webkit-border-radius: 5px;
                  border-radius: 5px;
                  margin: 5px;
                  display:inline;" name="5" value="Удалить Тур" onClick='location.href="del_tour.php"'></div>

                  </div>
                  <div class="box">

                <div><input type="button" style="padding:5px 15px; background:#E64A19; border:0 none;
                    cursor:pointer;
                 color: #fff;
                    -webkit-border-radius: 5px;
                    border-radius: 5px;
                    margin: 5px;
                    display:inline;" name="4" value="Добавить гида" onClick='location.href="guide_add.php"'></div>

               <div><input type="button"style="padding:5px 15px; background:#E64A19; border:0 none;
                   cursor:pointer;
                   color: #fff;
                   -webkit-border-radius: 5px;
                   border-radius: 5px;
                   margin: 5px;
                   display:inline;" name="5" value="Удалить гида" onClick='location.href="del_guide.php"'></div>

                   </div>
                   <div class="box">

                 <div><input type="button" style="padding:5px 15px; background:#E64A19; border:0 none;
                     cursor:pointer;
                  color: #fff;
                     -webkit-border-radius: 5px;
                     border-radius: 5px;
                     margin: 5px;
                     display:inline;" name="4" value="Редактировать отзыв" onClick='location.href="edit_feedback.php"'></div>

                <div><input type="button"style="padding:5px 15px; background:#E64A19; border:0 none;
                    cursor:pointer;
                    color: #fff;
                    -webkit-border-radius: 5px;
                    border-radius: 5px;
                    margin: 5px;
                    display:inline;" name="5" value="Удалить отзыв" onClick='location.href="del_feedback.php"'></div>

                    </div>
                    <div class="box">

                  <div><input type="button" style="padding:5px 15px; background:#E64A19; border:0 none;
                      cursor:pointer;
                   color: #fff;
                      -webkit-border-radius: 5px;
                      border-radius: 5px;
                      margin: 5px;
                      display:inline;" name="4" value="Добавить новость" onClick='location.href="add_news.php"'></div>

                 <div><input type="button"style="padding:5px 15px; background:#E64A19; border:0 none;
                     cursor:pointer;
                     color: #fff;
                     -webkit-border-radius: 5px;
                     border-radius: 5px;
                     margin: 5px;
                     display:inline;" name="5" value="Удалить новость" onClick='location.href="del_news.php"'></div>

                     </div>
                     <div class="box">

                   <div><input type="button" style="padding:5px 15px; background:#E64A19; border:0 none;
                       cursor:pointer;
                    color: #fff;
                       -webkit-border-radius: 5px;
                       border-radius: 5px;
                       margin: 5px;
                       display:inline;" name="4" value="Добавить город" onClick='location.href="city_add.php"'></div>

                  <div><input type="button"style="padding:5px 15px; background:#E64A19; border:0 none;
                      cursor:pointer;
                      color: #fff;
                      -webkit-border-radius: 5px;
                      border-radius: 5px;
                      margin: 5px;
                      display:inline;" name="5" value="Удалить город" onClick='location.href="del_city.php"'></div>

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
