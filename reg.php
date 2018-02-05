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
        <h1 style="text-align:center; color:#E64A19; margin: 50px;">Регистрация</h1>
        <?
$Surname = $_POST["Surname"];
$Name = $_POST["Name"];


$Phone = $_POST["Phone"];

$Login = $_POST["Login"];

$Pass = $_POST["Pass"];
$Pass2 = $_POST["Pass2"];


include ('connect.php');

if($Surname !="" && $Name !="" && $Login !="" && $Pass !="" && $Pass2 !="")
{
 # проверям логин
 if(!preg_match("/^[a-zA-Z0-9]+$/",$_POST['Login']))
 {
     $message = "<table align='center'><tr><td bgcolor='#ff9999' align='center'><b>
     Логин может состоять только из букв английского алфавита и цифр!
     </b></td></tr></table>";
 }
 else if(strlen($_POST['Login']) < 3 or strlen($_POST['Login']) > 30)
 {
     $message = "<table align='center'><tr><td bgcolor='#ff9999' align='center'><b>
     Логин должен быть не меньше 3-х символов и не больше 30!
     </b></td></tr></table>";
 }
 else if($Pass != $Pass2)
 {
     $message = "<table align='center'><tr><td bgcolor='#ff9999' align='center'><b>
     Поля пароля и повтора пароля не совпадают!
     </b></td></tr></table>";
 }
 else
 {
     $strSQL1 = "SELECT * FROM `пользователь` WHERE `Логин` = '".$Login."'";
     $result1 = mysql_query($strSQL1) or die ("Не могу выполнить зарпрос!");

     if($row=mysql_fetch_array($result1))
     {
         $message = "<table style=\"width:400px;margin:auto;\"><tr><td bgcolor='#ff9999' align='center'><b>
         Пользователь с таким логином или Email уже зарегистрирован! Выберите другой логин.
         </b></td></tr></table>";
     }
     else
     {
         $strSQL1 = "INSERT INTO `пользователь` (`id`, `Фамилия`, `Имя`,  `Телефон`, `Логин`, `Пароль`,`Роль`)
         VALUES ('', '".$Surname."', '".$Name."', '".$Phone."', '".$Login."',
         '".$Pass."', '2')";
         $result1 = mysql_query($strSQL1) or die ("Не могу выполнить зарпрос!");

         $message = "<table style=\"width:400px;margin:auto;\"><tr><td bgcolor='#66cc66'><b>
         Вы успешно зарегистрированы!
         </b></tr></td></table>";
         $success = true;
     }

 }

}


echo $message;

if(!$succes)
{

    echo"<table border=0 style=\"width: 400px;margin: auto;\">";
        echo"<form ACTION=\"reg.php\" method=\"post\">";
        echo"<tr>";
            echo"<td>Фамилия</td>";
            echo"<td><input required type=\"text\" class=\"form-control\" style=\"background:#3b4148;color:#fff;\" name=Surname maxlength=30 size=30 value=\"".$Surname."\"></td>";
        echo"</tr>";
        echo"<tr>";
            echo"<td>Имя</td>";
            echo"<td><input required type=\"text\" class=\"form-control\" style=\"background:#3b4148;color:#fff;\" name=Name maxlength=30 size=30 value=\"".$Name."\"></td>";
        echo"</tr>";
        echo"<tr>";
            echo"<td>Телефон</td>";
            echo"<td><input required type=\"text\" class=\"form-control\" style=\"background:#3b4148;color:#fff;\" name=Phone maxlength=30 size=30 value=\"".$Phone."\"></td>";
        echo"</tr>";
        echo"<tr>";
            echo"<td>Логин</td>";
            echo"<td><input required type=\"text\" class=\"form-control\" style=\"background:#3b4148;color:#fff;\" name=Login maxlength=30 size=30 value=\"".$Login."\"></td>";
        echo"</tr>";
        echo"<tr>";
            echo"<td>Пароль</td>";
            echo"<td><input type=password class=\"form-control\" style=\"background:#3b4148;color:#fff;\" name=Pass maxlength=30 size=30 value=\"\"></td>";
        echo"</tr>";
        echo"<tr>";
            echo"<td>Повтор пароля</td>";
            echo"<td><input type=password class=\"form-control\" style=\"background:#3b4148;color:#fff;\" name=Pass2 maxlength=30 size=30 value=\"\"></td>";
        echo"</tr>";
        echo"<tr>";
            echo"<td colspan=2 align=\"center\"><input type=submit class=\"btn btn-default reg_btn\" value=\"Отправить\"></td>";
        echo"</tr>";
        echo"</form>";
    echo"</table>";
 mysql_close();
}
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
