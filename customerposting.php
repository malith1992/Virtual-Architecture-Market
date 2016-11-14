

<?php

include "connect2.php";


$title = mysql_real_escape_string($_POST['title']);
$type= mysql_real_escape_string($_POST['type']);
$area= mysql_real_escape_string($_POST['area']);
$info= mysql_real_escape_string($_POST['info']);

$addwork = mysql_query("INSERT INTO work (C_ID,Title,Type,Area,Oinfo) VALUES ('".$_SESSION['Cid']."', '".$title."', '".$type."', '".$area."', '".$info."')");



echo "<meta http-equiv='refresh' content='=2;customermyposts.php' />";


?>