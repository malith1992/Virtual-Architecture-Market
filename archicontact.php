<?php include "connect2.php"; ?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="vendors/bootstrap-3.3.6-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="css/Home.css">
</head>
<body>
    



<div class="container">
   
<div class="well">
<div class="row">
    <div class="col-md-4 h2" id="iLi">iLimit</div>
    <div class="col-md-6 h2"><h2>Virtual Architect Market</h2></div>
</div>
<hr>
    <div class="row"></div>     
</div> 

<div class="well">
         <div class="row">
         <div class="col-md-8"><h1><center><code><?=$_SESSION['Firstname']?></code><code><?=$_SESSION['Lastname'] ?></code></center></h1></div>
         <div class="col-md-4">
              <div class="col-md-6">Notifications</div>
              <a href="logout2.php"><input type="button"  class="btn btn-danger" value ="Logout" ></a>
         </div></div>
         <div class="row"></div>
        <hr>
        <div class="row"></div>
         <div class="row"></div>
     <div class="row">
   <div class="col-md-2"><center> 
    <h4>Welcome!</h4>
       </center></div>
   <div class="col-md-2"><center> 
       <a href="architecthome.php"><input type="button" value="Home" class="btn"></a>
       </center></div>
    <div class="col-md-2"><center>
        <a href="archiprofile2.php"><input type="button" value="Profile" class="btn"></a>
      </center></div>
  <div class="col-md-2"><center>
      <a href="archimyprojects.php"><input type="button" value="My Projects" class="btn"></a>
      </center></div>
  <div class="col-md-2"><center>
      <a href="archiwork.php"><input type="button" value="Post Projects" class="btn"></a>
      </center></div>
  <div class="col-md-2"><center>
      <a href="archicontact.php"><input type="button" value="Contact" class="btn"></a>
     </center></div></div>
    </div>
    

    
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
    
   
</body>
</html>