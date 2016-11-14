<?php include "connect2.php"; ?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="vendors/bootstrap-3.3.6-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="css/Home.css">

<style>
#notification_count
{
padding: 0px 12px 12px 28px;
background: #FFB300;
color: #000000;
font-weight: bold;
margin-left: -60px;
border-radius: 18px;
-moz-border-radius: 18px;
-webkit-border-radius: 18px;
position: absolute;
margin-top: -1px;
font-size: 30px;
}
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
 
 
function addmsg(type, msg){
 
$('#notification_count').html(msg);
 
}
 
function waitForMsg(){
 
$.ajax({
type: "GET",
url: "select.php",
 
async: true,
cache: false,
timeout:50000,
 
success: function(data){
addmsg("new", data);
setTimeout(
waitForMsg,
1000
);
},
error: function(XMLHttpRequest, textStatus, errorThrown){
addmsg("error", textStatus + " (" + errorThrown + ")");
setTimeout(
waitForMsg,
15000);
}
});
};
 
$(document).ready(function(){
 
waitForMsg();
 
});

function getNotification(){
	window.alert("notify");
	
}
 
</script>
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
			<span id="notification_count"></span>
              <div class="col-md-6">
			  <a  id="notificationLink"  href="notification.php"  style="font-size: 20px;font-weight: bold;margin-left:-38px;color: #000000;">Notifications:</a>
			  </div>
              <a href="logout2.php"><input type="button"  class="btn btn-danger" value ="Logout" ></a>
         </div></div>
         <div class="row"></div>
        <hr>
        <div class="row"></div>
         <div class="row"></div>
    <div class="row">
   <div class="col-md-4"><center> 
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
 </div>
    </div>
    
<div class="well">
<div class="row">
    <div class="col-md-4">
        <img src="Resources/Images/house1.jpg" class="img-rounded" alt="HouseExterior" width="300" height="200">
        <h2><center>Welcome to iLimit</center></h2><br>
            <h3><center>Hire expert Architects to design your dream house.</center></h3>
    </div>
    
    <div class="col-md-4">
        <img src="Resources/Images/house2.jpg" class="img-rounded" alt="HouseInterior" width="300" height="200">
        <h2><center>Latest News</center></h2><br>
            <h3><center>Millions of architects have registered on our website to provide a quality service.</center></h3>
    </div>
    
    <div class="col-md-4">
        <img src="Resources/Images/house3.jpg" class="img-rounded" alt="HouseInterior" width="300" height="200">
        <h2><center>Useful Info</center></h2><br>
        <h3><center>You can register as an architect and get work or register as a customer and get your work done.</center></h3>
    </div>
</div>
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