<?
header("Cache-control: no-cache");

if(!isset($_COOKIE["id_basket"]))
{
	$uniq_ID=uniqid("ID");
	setcookie("id_basket", $uniq_ID, time()+60*60*24*14);
	//создадим ключик
}
else
{
	$id_basket = $_COOKIE["id_basket"];
	setcookie("id_basket", $id_basket, time()+60*60*24*14);
	//пересоздадим ключик с тем же значением
}


?>
<link href="css/bootstrap.min.css" tppabs="http://bootstrap-v4.ru/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">


<div class="header clearfix">
    <nav>
        <ul class="nav nav-pills pull-xs-right">
			<?
			$start=session_start();
			if(isset($_SESSION["log"]))
			{
			$role = $_SESSION["role"];
			if($role==1) {

			echo"<li class=\"nav-item\">";
			echo"<a class=\"nav-link\" href=\"admin.php\">Администрирование</a>";
			echo"</li>";
			}}
			?>
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Главная <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="news.php">Новости</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tours.php">Туры</a>
            </li>
            <li class="nav-item "><a class="nav-link" href="about.php">О нас</a>

                <!-- первый уровень выпадающего списка -->
                <ul>
                    <li class="nav-item"><a style="text-decoration: none;" href="guides.php">Гиды</a></li>
                    <li class="nav-item"><a style="text-decoration: none;" href="feedback.php">Отзывы</a></li>
                </ul>
            </li>

            <?php
  if(!isset($_SESSION["log"]))
{

            echo '<li class="nav-item">';
                echo '<a class="nav-link" href="login.php">Войти</a>';
            echo '</li>';
        }
        if(isset($_SESSION["log"]))
      {
                  echo '<li class="nav-item">';
                      echo '<a class="nav-link" href="exit.php">Выйти</a>';
                  echo '</li>';
              }
?>


        </ul>
    </nav>
    <a class="navbar-brand" href="index.php">
        <img src="img/logo.png" width="100" height="50" alt="">
      </a>
	  <?php if(isset($_SESSION["log"])){
 echo '<div style="margin-top:25px;color:#E64A19;" > <span style="font-weight: bolder;">Добро пожаловать,</span>';
 include "user.php";
 echo "</div>";
}
?>
</div>
