<?php

  include "connect2.php";   

$title = mysql_real_escape_string($_POST['title']);
$type= mysql_real_escape_string($_POST['type']);
$area= mysql_real_escape_string($_POST['area']);
$features= mysql_real_escape_string($_POST['features']);
$info= mysql_real_escape_string($_POST['info']);

mysql_query("INSERT INTO prework (A_ID,Title,Type,Area,Features,Oinfo) VALUES ('".$_SESSION['Aid']."', '".$title."', '".$type."', '".$area."', '".$features."', '".$info."')");



echo "<meta http-equiv='refresh' content='=2;archimyprojects.php' />";



?> 