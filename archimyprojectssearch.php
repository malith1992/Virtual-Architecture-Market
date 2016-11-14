<?php include "connect2.php"; 

//$getdata = mysql_query("SELECT * FROM work WHERE UserID='".$_SESSION['UserID']."' ");

$getdata = "
SELECT  *
FROM prework, architect
WHERE  prework.A_ID = customer.A_ID  AND UserID='".$_SESSION['UserID']."' ";

?>

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
         <div class="col-md-2"><center>
            <a href=""><input type="button"  class="btn btn-success" value ="Chat" ></a> </center> 
         </div>
    <div class="col-md-2"><center>
            <a href=""><input type="button"  class="btn btn-primary" value ="My Home" ></a> </center> 
             </div></div>
         <div class="row"></div>
        <hr>
        <div class="row"></div>
         <div class="row"></div>
     <div class="row">
   <div class="col-md-4"><center> 
       <h4>Welcome!</h4>
       </center></div>
    <div class="col-md-4"><center>
        <a href="archiprofilesearch.php"><input type="button" value="Profile" class="btn"></a>
      </center></div>
  <div class="col-md-4"><center>
      <a href="archimyprojectssearch.php"><input type="button" value="My Projects" class="btn"></a>
      </center></div>
 </div>
    </div>
    
<div class="well">
<div class="row">
        <h2><center>My Projects</center></h2>
    </div>

<div class="row">
    <h4>Current Projects</h4>
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
<td><center>LAND AREA</center></td>
<td><center>SPECCIAL FEATURES</center></td>
<td><center>OTHER INFORMATION</center></td>
<td><center>IMAGE</center></td></tr>';	
    
echo '<br>';
    
  echo '<tr><td><center>'.$query_execute['Title'].'</center></td><td><center>'.$query_execute['Type'].'</center></td><td><center>'.$query_execute['Features'].'</center></td><td><center>'.$query_execute['Oinfo'].'</center></td>
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