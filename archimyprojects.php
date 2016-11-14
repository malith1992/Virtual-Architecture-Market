<?php include "connect2.php"; 



$getdata = "
SELECT  *
FROM prework, architect
WHERE  prework.A_ID = architect.A_ID  AND UserID='".$_SESSION['UserID']."' ";

$getdata1 = "
SELECT *
FROM project
INNER JOIN accept
    on accept.Pro_ID = project.Pro_ID
INNER JOIN architect
    on architect.A_ID = accept.A_ID  AND UserID='".$_SESSION['UserID']."' ";

	
	
?>

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
			  <a  id="notificationLink"  href="#"  style="font-size: 20px;font-weight: bold;margin-left:-38px;color: #000000;">Notifications:</a>
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
    <div class="col-md-10">
        <h2>My Projects</h2>
    </div>

    <div class="col-md-2">
        <center>
    <a href="archiwork.php"><input type="button"  class="btn btn-lg btn-primary btn-block signup-btn" value ="New Project" > </a>
   </center></div>
    </div>
    
<div class="row">
    <h4>Current Projects</h4>
	
	    <?php

if($is_query_run=mysql_query($getdata1))
{

while($query_execute=mysql_fetch_assoc($is_query_run))
{
echo '<table border="1" style="width:600px">
<tr><td><center>TITLE</center></td>
<td><center>TYPE</center></td>
<td><center>LAND AREA</center></td>
<td><center>OTHER INFORMATION</center></td></tr>';	
    
echo '<br>';
    
  echo '<tr><td><center>'.$query_execute['Title'].'</center></td><td><center>'.$query_execute['Type'].'</center></td><td><center>'.$query_execute['Area'].'</center></td><td><center>'.$query_execute['Oinfo'].'</center></td>
  <td><center><a href="iLimit5/Docs/uploadplanoriginal.html">Upload plans</a></td>
  <td><center><a href="iLimit5/Docs/imagegallery.php">Design tool</a></td></tr></table>';
}
}
else
{
echo 'No Previous Projects';
}


?>
</div>
    
<div class="row">
   <h4>Previous Projects</h4>
    
    <?php

if($is_query_run=mysql_query($getdata))
{

while($query_execute=mysql_fetch_assoc($is_query_run))
{
echo '<table border="1" style="width:600px">
<tr><td><center>TITLE</center></td>
<td><center>TYPE</center></td>
<td><center>LAND AREA</center></td>
<td><center>SPECIAL FEATURES</center></td>
<td><center>OTHER INFORMATION</center></td>
<td><center>IMAGE</center></td></tr>';	
    
echo '<br>';
    
  echo '<tr><td><center>'.$query_execute['Title'].'</center></td><td><center>'.$query_execute['Type'].'</center></td><td><center>'.$query_execute['Area'].'</center></td><td><center>'.$query_execute['Features'].'</center></td><td><center>'.$query_execute['Oinfo'].'</center></td>
  <td><center>image</td></tr></table>';
}
}
else
{
echo 'No Previous Projects';
}


?>
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