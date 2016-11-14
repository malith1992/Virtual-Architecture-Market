<?php
       include "connect2.php";
		$sql = mysql_query("SELECT * from notification where A_ID='".$_SESSION['Aid']."'");
		echo mysql_num_rows($sql);
		
		$row = mysql_fetch_array($sql);
		
		$nid = $row['N_ID'];
		
		
		$_SESSION['nid'] = $nid;
	
       // Create connection
 
       //$conn = new mysqli($servername, $username, $password, $dbname);
 
       // Check connection
 
       //$checkEmail = mysql_query("SELECT * FROM user WHERE Email = '".$email."'");
		//$sql = mysql_query("SELECT * from notification");
		
       //$sql = "SELECT * from notification where A_ID='".$_SESSION['Aid']."'";
	    //$sql = mysql_query("SELECT * from notification where A_ID='".$_SESSION['Aid']."'");
       //$result = $conn->query($sql);
       //$row = $result->fetch_assoc();
       //$count = $result->num_rows;
       //echo mysql_num_rows($sql);
	   //$n=4;
	   //echo $_SESSION['Aid'];
       //$conn->close();
?> 