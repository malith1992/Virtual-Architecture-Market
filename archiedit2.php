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

	
	
	$bplace = mysql_real_escape_string($_POST['bplace']);
	$college = mysql_real_escape_string($_POST['college']);
	$uni = mysql_real_escape_string($_POST['uni']);
	$academic1 = mysql_real_escape_string($_POST['academic1']);
	$academic2 = mysql_real_escape_string($_POST['academic2']);
	$academic3 = mysql_real_escape_string($_POST['academic3']);
	$academic4 = mysql_real_escape_string($_POST['academic4']);
	$award1 = mysql_real_escape_string($_POST['award1']);
	$member = mysql_real_escape_string($_POST['member']);
	$phi = mysql_real_escape_string($_POST['phi']);
	$oinfo = mysql_real_escape_string($_POST['oinfo']);
	

	
   $updatequery = mysql_query("UPDATE architect SET College='".$college."',Birthplace='".$bplace."',University='".$uni."',Aq1='".$academic1."',Aq2='".$academic2."',Aq3='".$academic3."',Aq4='".$academic4."',Awards='".$award1."',Membership_year='".$member."',Philosophy='".$phi."',Other_info='".$oinfo."'  WHERE UserID='".$_SESSION['UserID']."' ");
   $getdata = mysql_query("SELECT * FROM architect WHERE UserID='".$_SESSION['UserID']."' ");
   
   $row = mysql_fetch_array($getdata);
        
		$College = $row['College'];
		$Bplace = $row['Birthplace'];
		$Uni = $row['University'];
		$Aq1 = $row['Aq1'];
		$Aq2 = $row['Aq2'];
		$Aq3 = $row['Aq3'];
		$Aq4 = $row['Aq4'];
		$Awards = $row['Awards']; 
		$Member = $row['Membership_year'];
		$Phi = $row['Philosophy'];
		$Oinfo = $row['Other_info'];
		
		$_SESSION['College'] = $College;
		$_SESSION['Birthplace'] = $Bplace;
		$_SESSION['University'] = $Uni;
		$_SESSION['Aq1'] = $Aq1;
		$_SESSION['Aq2'] = $Aq2;
		$_SESSION['Aq3'] = $Aq3;
		$_SESSION['Aq4'] = $Aq4;
		$_SESSION['Awards'] = $Awards;
		$_SESSION['Member'] = $Member;
		$_SESSION['Phi'] = $Phi;
		$_SESSION['Oinfo'] = $Oinfo;
		
	echo "<meta http-equiv='refresh' content='=2;archiprofile2.php' />";
	
	
	$_SESSION['edited'] = 0;
	
	$field= $_POST['field'];   //architects field selecting
	if(empty($field))    
    {
        echo("<p>You didn't select any any fieldy.</p>\n");
    } 
    else 
    {
        $N = count($field);
        echo("<p>You selected $N fields(s): ");
        for($i=0; $i < $N; $i++)
        {
            $var1=$field[$i]; 
            $table = mysql_query("INSERT INTO skill (A_ID, Skill) VALUES ('".$_SESSION['Aid']."','".$var1."')");
            
            $inserted_fid = mysql_insert_id();
             
        }

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
      <h3><center>Architecture Profile Updating Form.</center></h3>
    </div>
</div>
    
<div class="container" id="wrap">
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <form action="archiedit2.php" method="post" accept-charset="utf-8" class="form" role="form">   <legend><center><h1>Update Info</h1></center></legend>
            
                    

    
<div class="row">
	<label>Birth Place</label>
   <input type="text" name="bplace" value="" class="form-control input-lg"/>
</div><br>
            
<div class="row">
    <label>School</label>
   <input type="text" name="college" value="" class="form-control input-lg"/>
</div><br>
<div class="row">
    <label>University</label>
   <input type="text" name="uni" value="" class="form-control input-lg"/>
</div><br>
<div class="row">
    <label>Academic Qualifications</label>
        <input type="text" name="academic1" value="" class="form-control input-lg"/>
        <input type="text" name="academic2" value="" class="form-control input-lg"/>
        <input type="text" name="academic3" value="" class="form-control input-lg"/>
        <input type="text" name="academic4" value="" class="form-control input-lg"/>
</div><br>
            
<div class="row">
    <label>Interested Fields</label>
    <input type="checkbox" name="field[]" value="house">House
  <input type="checkbox" name="field[]" value="Build" checked> Building
</div><br>
            
<div class="row">
    <label>Awards</label>
       <input type="text" name="award1" value="" class="form-control input-lg"/>
        
</div><br>
            
<div class="row">
    <label>Year of recieving membership</label>
       <input type="date" name="member" value="" class="form-control input-lg"/>
</div><br>
            
<div class="row">
    <label>Philosophy</label>
      <textarea class="form-control" rows="6" id="comment" name="phi" value="" ></textarea>
</div><br>
            
<div class="row">
    <label>Other Info</label>
       <textarea class="form-control" rows="6" id="comment" name="oinfo" value=""></textarea>
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