


<?php
include "connect2.php";


$test = input($_POST["archisearch"]);   
  
  
$getarchitect = mysql_query("SELECT * FROM user WHERE Firstname='".$test."' ");

 $row = mysql_fetch_array($getarchitect);
        
		$UserID = $row['UserID'];
		
$_SESSION['UserIDnew'] = $UserID;
echo $_SESSION['UserIDnew'] ;

//echo "<meta http-equiv='refresh' content='=2;archiprofile2.php' />";





?> 