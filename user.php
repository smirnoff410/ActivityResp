<?
include ('connect.php');
 echo ' <span style="margin-top:0;padding:0;">'
 .$_SESSION["log"];
 '</span>';
$role = $_SESSION["role"];
if($role==1) {print " (Администратор)";}
if($role==2) {print " (Пользователь)";}
?>
