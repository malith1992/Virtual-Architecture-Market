<?php include "connect2.php"; 

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="vendors/bootstrap-3.3.6-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="css/Home.css">
<style>

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
function deleterow(){
$.ajax({
type: "GET",
url: "deleterow.php",
 
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
	
}
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
			<center>

              <a href="logout2.php"><input type="button"  class="btn btn-danger" value ="Logout" ></a></center>
         </div></div>
		 </div>
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
        <h2>Your Notifications</h2>
    </div>
<!--
    <div class="col-md-2">
        <center>
    <a href="archiwork.php"><input type="button"  class="btn btn-lg btn-primary btn-block signup-btn" value ="New Project" > </a>
   </center></div>
    </div>
    
<div class="row">
    <h4>Current Projects</h4>
</div>
    
<div class="row">
   <h4>Previous Projects</h4>    -->
    
    <?php
		$getnotifications = ("SELECT * from notification where A_ID='".$_SESSION['Aid']."'");

if($is_query_run=mysql_query($getnotifications))
{
echo '<center><table border="1" style="width:600px">
<thead><b><td><center>Customer ID</center></td>
<td><center>Description</center></td>
<td><center>Your Decision</center></td></b></thead>';	

while($query_execute=mysql_fetch_assoc($is_query_run))
{

    
    
  echo '<tr><td><center>'.$query_execute['C_ID'].'</center></td><td><center>'.$query_execute['description'].'</center></td><td><center><button class="btn btn-info" onclick="deleterow()">Approve</button>  <button class="btn btn-warning">Reject</button></center></td></tr>';
}
echo '</table></center>';
}
else
{
echo 'No Notification to Display';
}


?>
</div>
    
    </div>

<hr>
    
<div class="well">
<div class="row">
    <div class="col-md-4">
        <h2><center>Useful Links</center></h2><br>
            <ul>
               <li><a href="http://www.slia.lk/">Sri Lanka Institute of Architects</a></li>
               <li><a href="http://www.lankapropertyweb.com/services/property_services.php?type=Architects">Directory of Architects Sri Lanka</a></li></ul>
    </div>
    
    <div class="col-md-4">
        <h2><center>Short About Us</center></h2><br>
    </div>
    
    <div class="col-md-4">
        <h2><center>Copy Rights</center></h2><br>
        <P> &#169; iLmit VAM. <br />
            Copy rights. 2011. All rights reserved.</P>
          <P>Designed By : <a href="www.iLimit.com" target="_blank">www.iLimit.com</a><br />
            </P>
    </div>
    
    </div>
    </div>
    

</div>  
    
<script type="text/javascript" src="vendors/jquery.min.js"></script>
<script type="text/javascript" src="vendors/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>  
    
   
</body>
</html>