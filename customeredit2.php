<?php include "connect2.php"; ?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="vendors/bootstrap-3.3.6-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="css/Home.css">
</head>
<body>

<div class="container">
   
 <?php

 
if(!empty($_SESSION['edited']))

{

	
	
	$occupation = mysql_real_escape_string($_POST['occupation']);

	
	$checkempty = mysql_query("SELECT * FROM customer WHERE UserID='".$_SESSION['UserID']."' ");
	
	if(mysql_num_rows($checkempty) == 1)
	{
	
	
	
   $updatequery = mysql_query("UPDATE customer SET Occupation='".$occupation."' WHERE UserID='".$_SESSION['UserID']."' ");
   $getdata = mysql_query("SELECT * FROM customer WHERE UserID='".$_SESSION['UserID']."' ");
   
   $row = mysql_fetch_array($getdata);
        
		$Occupation = $row['Occupation'];
		
		
		$_SESSION['Occupation'] = $Occupation;
		
	echo "<meta http-equiv='refresh' content='=2;session2.php' />";
	
	$_SESSION['edited'] = 0;  
	
	}
	elseif(mysql_num_rows($checkempty) == 0)
	{
	
	$insertquery = mysql_query("INSERT INTO customer (UserID,Occupation) VALUES  ('".$_SESSION['UserID']."','".$Occupation."')");  
    $getdata = mysql_query("SELECT * FROM customer WHERE UserID='".$_SESSION['UserID']."' ");
   
   $row = mysql_fetch_array($getdata);
        
		$Occupation = $row['Occupation'];
 		
		
		$_SESSION['Occupation'] = $Occupation;
		
	echo "<meta http-equiv='refresh' content='=2;session2.php' />";
	
	$_SESSION['edited'] = 0;  
	
	
	}
}
        

elseif (!empty($_SESSION['LoggedIn']))

	
{     

		$_SESSION['edited'] = 1;  
		
?>	
   
<div class="well">
<div class="row">
    <h2><center>iLimit Virtual Architect Market</center></h2>
    </div>
<hr>
<div class="row"></div>   

<div class="row">
      <h3><center>Customer Profile Updating Form.</center></h3>
    </div>
</div>
    
<div class="container" id="wrap">
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <form action="customeredit2.php" method="post" accept-charset="utf-8" class="form" role="form">   <legend><center><h1>Update Info</h1></center></legend>
            
                    

    

            
<div class="row">
    <label>Occupation</label>
   <input type="text" name="occupation" value="" class="form-control input-lg"/>
</div><br>

    
<button class="btn btn-lg btn-primary btn-block signup-btn" type="submit">Submit</button>

   </form>
</div>
</div>
</div>

<script type="text/javascript" src="vendors/jquery.min.js"></script>
<script type="text/javascript" src="vendors/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script> 

<?php


}

else
{
echo "<p>You have to login first to access this page Please <a href=\"session2.php\">click here to login</a>.</p>";
}
?> 
  
</div>   
</body>
</html>	