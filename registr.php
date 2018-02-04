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
    <link rel="icon" href="img/logo.png" tppabs="http://bootstrap-v4.ru/favicon.ico">

    <title>Активный отдых</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" tppabs="http://bootstrap-v4.ru/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body style="background-image: url(img/fon.jpg);background-size: 100%;">

    <div class="container">
        <?include "header.php"?>

        <div id="login">
            <form action="javascript:void(0);" method="post">
                <fieldset class="clearfix">
                    <tr><td><p><span class="fontawesome-user"></span><input name=surname maxlength=30 size=30 type="text" value="Фамилия" onBlur="if(this.value == '') this.value = 'Фамилия'" onFocus="if(this.value == 'Фамилия') this.value = ''" required></p></tr></td>
                    <tr><td><p><span class="fontawesome-user"></span><input name=name maxlength=30 size=30 type="text" value="Имя" onBlur="if(this.value == '') this.value = 'Имя'" onFocus="if(this.value == 'Имя') this.value = ''" required></p></tr></td>
                    <tr><td><p><span class="fontawesome-user"></span><input name=number maxlength=30 size=30 type="text" value="Телефон" onBlur="if(this.value == '') this.value = 'Телефон'" onFocus="if(this.value == 'Телефон') this.value = ''" required></p></tr></td>
                    <tr><td><p><span class="fontawesome-user"></span><input name=login maxlength=30 size=30 type="text" value="Логин" onBlur="if(this.value == '') this.value = 'Логин'" onFocus="if(this.value == 'Логин') this.value = ''" required></p></tr></td>
                    <!-- JS because of IE support; better: placeholder="Username" -->
                    <tr><td><p><span class="fontawesome-lock"></span><input type=password name=pass maxlength=30 size=30 value="Пароль" onBlur="if(this.value == '') this.value = 'Пароль'" onFocus="if(this.value == 'Пароль') this.value = ''" required></p></tr></td>
                    <tr><td><p><span class="fontawesome-lock"></span><input type=password name=pass maxlength=30 size=30 value="Пароль" onBlur="if(this.value == '') this.value = 'Пароль'" onFocus="if(this.value == 'Пароль') this.value = ''" required></p></tr></td>
                    <!-- JS because of IE support; better: placeholder="Password" -->
                    <tr><td><p><input type="submit" value="ЗАРЕГИСТРИРОВАТЬСЯ"></p></tr></td>
                </fieldset>
            </form>
            <p>Есть аккаунт? &nbsp;&nbsp;<a href="login.php">Вход</a><span class="fontawesome-arrow-right"></span></p>
        </div>
        <div class="gradient"></div>

        <?include "footer.php"?>

    </div>
    <!-- /container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".username").focus(function() {
                $(".user-icon").css("left", "-48px");
            });
            $(".username").blur(function() {
                $(".user-icon").css("left", "0px");
            });

            $(".password").focus(function() {
                $(".pass-icon").css("left", "-48px");
            });
            $(".password").blur(function() {
                $(".pass-icon").css("left", "0px");
            });
        });
    </script>
</body>

</html>
