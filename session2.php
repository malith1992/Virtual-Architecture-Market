<?php include "connect2.php";  ?>
<!DOCTYPE html>

<html>
<head>
<link rel="stylesheet" href="vendors/bootstrap-3.3.6-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="css/Home.css">
</head>
<body>

<div class="container">

<?php
if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['email']))
{
   
 
		if($_SESSION['Role'] =='Customer')
        {
        echo "<h1>Success</h1>";
        echo "<p>We are now redirecting you to the member area.</p>";
        echo "<meta http-equiv='refresh' content='=2;customerhome.php' />";
		}
		
		else
		{
		echo "<h1>Success</h1>";
        echo "<p>We are now redirecting you to the member area.</p>";
        echo "<meta http-equiv='refresh' content='=2;architecthome.php' />";
		}

    
    
}
elseif(!empty($_POST['email']) && !empty($_POST['password']))
{
    $email = mysql_real_escape_string($_POST['email']); //clean database input
    $password = md5($_POST['password']); 
     
    $checklogin = mysql_query("SELECT * FROM user WHERE Email = '".$email."' AND Password = '".$password."'");
    	
    if(mysql_num_rows($checklogin) == 1)
    {
        $row = mysql_fetch_array($checklogin);
        $Firstname = $row['Firstname'];
		$Lastname = $row['Lastname'];
		$DoB = $row ['DoB'];
		$User = $row['Role'];
		$UserID = $row['UserID'];
		
		
		
		
		$_SESSION['email'] = $email;
		$_SESSION['Firstname'] = $Firstname;
		$_SESSION['Lastname'] = $Lastname;
		$_SESSION['DoB'] = $DoB;
		$_SESSION['Role'] = $User;
		$_SESSION['UserID'] = $UserID;
        $_SESSION['LoggedIn'] = 1;
		$_SESSION['posted'] = 0;
		
		if($_SESSION['Role'] =='Customer')
        {
		
		$getcustomer = mysql_query("SELECT * FROM customer WHERE UserID='".$_SESSION['UserID']."' ");
					 
					 $row = mysql_fetch_array($getcustomer);
					 
					 $Occupation = $row['Occupation'];
					 $Cid = $row['C_ID'];
					 
					 $_SESSION['Cid'] = $Cid;
					 $_SESSION['Occupation']= $Occupation ;
					 
        echo "<h1>Success</h1>";
        echo "<p>We are now redirecting you to the member area.</p>";
        echo "<meta http-equiv='refresh' content='=2;customerhome.php' />";
		}
		
		else
		{
		
		 $getarchitect = mysql_query("SELECT * FROM architect WHERE UserID='".$_SESSION['UserID']."' "); // to fill the fields on archiedit.php automatically
   
   $row = mysql_fetch_array($getarchitect);
        
		$Aid = $row['A_ID'];
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
		
		$_SESSION['Aid'] = $Aid;
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
		
		echo "<h1>Success</h1>";
        echo "<p>We are now redirecting you to the member area.</p>";
        echo "<meta http-equiv='refresh' content='=2;architecthome.php' />";
		}
    }
    else
    {
        echo "<h1>Error</h1>";
        echo "<p>Sorry, your account could not be found. Please <a href=\"session2.php\">click here to try again</a>.</p>";
    }
}
else
{
    ?>
     
   <div class="well darkwell">
<div class="row">
    <div class="col-md-4 h2" id="iLi">iLimit</div>
    <div class="col-md-6 h2"><h2>Virtual Architect Market</h2></div>
    
</div>
<hr>
    <div class="row"></div>

<div class="row">
  <div class="col-md-4">
      <h4><center>WELCOME!</center></h4>
    </div>
  <div class="col-md-2">
      <a href="index.php"><input type="button" value="Home" class="btn"></a>
  </div>
  <div class="col-md-2">
      <a href="about.html"><input type="button" value="About Us" class="btn"></a>
  </div>
  <div class="col-md-2">
      <a href="Services.html"><input type="button" value="Services" class="btn"></a>
  </div>
  <div class="col-md-2">
      <a href="Contact.html"><input type="button" value="Contact" class="btn"></a>
  </div>
</div>     
</div> 

<div class="container" id="wrap">
<div class="row" id="formD">
    <div class="col-md-6 col-md-offset-3">
        <form action="session2.php" method="post" accept-charset="utf-8" class="form" role="form">   <legend><center><h1>Login</h1></center></legend>
           
<div class="row">
<input type="text" name="email" class="form-control"  placeholder="Email" required>
</div><br>
<div class="row">
<input type="password" name="password" class="form-control"  placeholder="Password" required>
</div><br>

	  
<div class="row"><center>
<div class="checkbox">
    <label>
      <input type="checkbox"> Remember me. 
    </label>
    </div></center>
    </div>

<center>
    <button class="btn btn-lg btn-primary btn-block signup-btn" type="submit"> Login</button><br>
    
    <span>&nbsp;&nbsp;<a href="" data-toggle="modal" data-target="#myModal"> Forgot Password </a></span><br>
    
    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Find your account.</h4>
        </div>
        <div class="modal-body">
          <div class="row">
              <div class="col-md-6 col-md-offset-3">
                  <p>Enter your email.</p>
                  <input type="text" name="email1" value="" class="form-control input-lg"/></div></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal"><a href="mailto:email@email.co">Close</a></button>
        </div>
      </div>
    </div>
  </div>
<br>
    
<p>Don't have an account ? <a href="register2.php">Sign Up now</a></p>
</center></form>

    </div></div>
    
<hr>
    
<div class="well lightwell">
<div class="row">
    <div class="col-md-4">
        <h2><center>Useful Links</center></h2><br>
            <ul>
               <li><a href="http://www.slia.lk/">Sri Lanka Institute of Architects</a></li>
               <li><a href="http://www.lankapropertyweb.com/services/property_services.php?type=Architects">Directory of Architects Sri Lanka</a></li></ul>
    </div>
    
    <div class="col-md-4">
        <h2><center>Short About Us</center></h2><br>
        <P><center>We provide a platform for architects and clients to meet and communicate.</center></P>
    </div>
    
    <div class="col-md-4">
        <h2><center>Copy Rights</center></h2><br>
        <center><P> &#169; iLmit VAM. <br />
            Copy rights. 2011. All rights reserved.</P>
          <P>Designed By : <a href="www.iLimit.com" target="_blank">www.iLimit.com</a><br />
            </P></center>
    </div>
    
    </div>
    </div>
    
</div>

    
<script type="text/javascript" src="vendors/jquery.min.js"></script>
<script type="text/javascript" src="vendors/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>  
    
   <?php
}
?>
 
</div>
</body>
</html>