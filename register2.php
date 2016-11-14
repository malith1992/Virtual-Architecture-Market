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
if(!empty($_POST['email']) && !empty($_POST['password']))
{
    $firstname = mysql_real_escape_string($_POST['firstname']);
    $lastname = mysql_real_escape_string($_POST['lastname']);
	$email = mysql_real_escape_string($_POST['email']);
	$password = md5($_POST['password']);
	$dob = mysql_real_escape_string($_POST['bday']);
	$gender = mysql_real_escape_string($_POST['gender']);
	$user = mysql_real_escape_string($_POST['user']);
    
     
	
		$checkEmail = mysql_query("SELECT * FROM user WHERE Email = '".$email."'");
		
    if(mysql_num_rows($checkEmail) == 1)
    {
			echo "<h1>Error</h1>";
			echo "<p>Sorry, that Email is already registered.</p>";
	}
	else
	{
		
        $register = mysql_query("INSERT INTO user (Firstname,Lastname,Email,Password,DoB,Gender,Role) VALUES ('".$firstname."', '".$lastname."', '".$email."', '".$password."', '".$dob."','".$gender."','".$user."')");
		$checkrole = mysql_query("SELECT * FROM user WHERE Email = '".$email."'");
		
		$row = mysql_fetch_array($checkrole);
		
		$User = $row['Role'];
		$UserID = $row['UserID'];
		
		$_SESSION['Role'] = $User;
		$_SESSION['UserID'] = $UserID;
		
		
			if($register)
			{
				if($_SESSION['Role'] =='Customer')
				{
					$_SESSION['email'] = $email;
					$_SESSION['LoggedIn'] = 1;
					$_SESSION['Firstname'] = $firstname;
					$_SESSION['Lastname'] = $lastname;
					$_SESSION['DoB']= $dob;
					
					
					 $customeradd = mysql_query("INSERT INTO customer (UserID) VALUES  ('".$_SESSION['UserID']."')");
					 
					 $getcustomer = mysql_query("SELECT * FROM customer WHERE UserID='".$_SESSION['UserID']."' ");
					 
					 $row = mysql_fetch_array($getcustomer);
					 
					 $Cid = $row['C_ID'];
					
					 
					 $_SESSION['Cid'] = $Cid;
					
					 
					 $_SESSION['posted'] = 0;
					echo "<meta http-equiv='refresh' content='=2;customeredit2.php' />";
					
				}
				else
				{
					$_SESSION['email'] = $email;
					$_SESSION['LoggedIn'] = 1;
					$_SESSION['Firstname'] = $firstname;
					$_SESSION['Lastname'] = $lastname;
					$_SESSION['DoB']= $dob;
					
		$architectadd = mysql_query("INSERT INTO architect (UserID) VALUES ('".$_SESSION['UserID']."')"); 
		$getarchitect = mysql_query("SELECT * FROM architect WHERE UserID='".$_SESSION['UserID']."' ");
   
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
					
					
					echo "<meta http-equiv='refresh' content='=2;archiedit2.php' />";
					
				}


			}
			else
			{
				echo "<h1>Error</h1>";
				echo "<p>Sorry, your registration failed. Please go back and try again.</p>";    
			}       
		}
	}	
	


else
{
    ?>	

   
<div class="well darkwell">
<div class="row">
    <div class="col-md-4 h2" id="iLi">iLimit</div>
    <div class="col-md-6 h2"><h2>Virtual Architect Market</h2></div>
	<div class="col-md-2 ">
        <a href="session2.php"><input type="button"  class="btn btn-info" value ="Log In" ></a>
       
    </div>
   
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
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <form action="register2.php" method="post" accept-charset="utf-8" class="form" role="form">   <legend><center><h1>Sign Up</h1></center></legend>
            <h4><center>It's free and always will be.</center></h4>
                    
<div class="row">
    <div class="col-xs-6 col-md-6">
    <input type="text" name="firstname" value="" class="form-control input-lg" placeholder="First Name" required/>                        
    </div>
    <div class="col-xs-6 col-md-6">
   <input type="text" name="lastname" value="" class="form-control input-lg" placeholder="Last Name" required/>
   </div>
   </div>
   <br> 
            
   <input type="text" name="email" value="" class="form-control input-lg" placeholder="Your Email" required/><br> 
            
   <input id="password" name="password" type="password" class="form-control input-lg" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 6 characters' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;" placeholder="Password" required><br>
            
   <input id="password_two" name="password_two" type="password" class="form-control input-lg" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password as above' : '');" placeholder="Verify Password" required><br>
            
   <label>Date of Birth</label>                    

<div class="row">
    <input type="date" name="bday"  class="form-control input-lg" required>
  </div>
    
    <br>
    <label>Gender : </label>                    
    <label class="radio-inline">
    <input type="radio" name="gender" value="Male" id=male /> Male</label>
    <label class="radio-inline">
    <input type="radio" name="gender" value="Female" id=female />Female</label>
    <br>
    
      <label>I am   a/an :</label>
      <label class="raio-inline">
      <input type="radio" name="user" id="Architect" value="Architect" >
      </label>Architect
      
      <label class="raio-inline">
       <input type="radio" name="user" id="Customer" value="Customer">
        
      </label>Customer
              
    <span class="help-block">By clicking Create my account, you agree to our Terms and that you have read our Data Use Policy, including our Cookie Use.</span>
    <button class="btn btn-lg btn-primary btn-block signup-btn" type="submit"> Create my account</button>
    </form>          
    </div>
</div>            
</div>



<br>
<br>
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
    <?php


}




?>
</div>

    
<script type="text/javascript" src="vendors/jquery.min.js"></script>
<script type="text/javascript" src="vendors/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>  
    
   
</body>
</html>