<?php include "connect2.php"; 


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
    <div class="col-md-8">
        <b>COLLEGE</b><br>
        <?=$_SESSION['College']?>

    </div>
    <div class="col-md-4">
        <b>BIRTH DATE : </b><?=$_SESSION['DoB']?> <br></b><br>
        <b>BIRTH PLACE :</b><?=$_SESSION['Birthplace']?></b>
</div>
</div><hr>

<div class="row">
    <b>&nbsp;&nbsp;&nbsp;&nbsp;UNIVERSITY</b><br>
    &nbsp;&nbsp;&nbsp;&nbsp;<?=$_SESSION['University']?>
    <hr>
</div>
    
<div class="row">
    <b>&nbsp;&nbsp;&nbsp;&nbsp;ACADEMIC QUALIFICATIONS</b><br>
    <ul>
       <li><?=$_SESSION['Aq1']?></li>
       <li><?=$_SESSION['Aq2']?></li>
       <li><?=$_SESSION['Aq3']?></li>
       <li><?=$_SESSION['Aq4']?></li>
    </ul>
    <hr>
</div>
    
<div class="row">
    <b>&nbsp;&nbsp;&nbsp;&nbsp;AWARDS</b><br>
    <ul>
       <li><?=$_SESSION['Awards']?></li>
       <!--<li><?=$_SESSION['Award2']?></li> -->
    </ul>
    <hr>
</div>

<div class="row">
    <b>&nbsp;&nbsp;&nbsp;&nbsp;Member of the Sri Lanka Institute of Architects from&nbsp; <?=$_SESSION['Member'] ?></b><br>
    <hr>
</div>
    
<div class="row">
     <b>&nbsp;&nbsp;&nbsp;&nbsp;PHILOSOPHY</b><br>
     <?=$_SESSION['Phi']?>
    <hr>
</div>

<div class="row">
     <b>&nbsp;&nbsp;&nbsp;&nbsp;OTHER INFO</b><br>
     <?=$_SESSION['Oinfo']?>
    <hr>
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