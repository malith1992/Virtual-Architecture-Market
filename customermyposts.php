<?php include "connect2.php";  



$getdata = "
SELECT  *
FROM work, customer
WHERE  work.C_ID = customer.C_ID  AND UserID='".$_SESSION['UserID']."' ";

/*$getdata1 = "
SELECT *
FROM project
INNER JOIN accept
    on accept.Pro_ID = project.Pro_ID
INNER JOIN work
    on work.Work_ID = accept.C_ID
INNER JOIN customer
    on work.C_ID = customer.C_ID
	AND UserID='".$_SESSION['UserID']."' "; */

	


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
         <div class="col-md-8"><h1><center><code><?=$_SESSION['Firstname']?></code> <code><?=$_SESSION['Lastname']?></code></center></h1>
		 <br><center>Occupation:<code><?=$_SESSION['Occupation']?></code></center></div>
         <div class="col-md-4">
              <div class="col-md-6">Notifications</div>
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
       <a href="customerhome.php"><input type="button" value="Home" class="btn"></a>
       </center></div>
  <div class="col-md-2"><center>
      <a href="customermyposts.php"><input type="button" value="My Posts" class="btn"></a>
      </center></div>
  <div class="col-md-2"><center>
      <a href="customerpostwork.php"><input type="button" value="Post Work" class="btn"></a>
      </center></div>
  <div class="col-md-2"><center>
      <a href="customercontact.php"><input type="button" value="Search" class="btn"></a>
     </center></div></div>
    </div>
    
<div class="well">
<div class="row">
    <div class="col-md-10">
        <h2>My Posts</h2>
    </div>

    <div class="col-md-2">
        <center>
    <a href="customerpostwork.php"><input type="button"  class="btn btn-lg btn-primary btn-block signup-btn" value ="New Post" > </a>
   </center></div>
   

   
    </div>
<div class="row">
    <h4>Current Projects</h4>
	

	<?php
    


if($is_query_run=mysql_query($getdata))
{

while($query_execute=mysql_fetch_assoc($is_query_run))
{
echo '<table class="table" border="1" style="width:600px">
<tr><td><center>TITLE</center></td>
<td><center>TYPE OF WORK</center></td>
<td><center>LAND AREA</center></td>
<td><center>DESCRIPTION</center></td>
<td><center>STATUS OF THE PROJECT</center></td></tr>';	
    
echo '<br>';
    
  echo '<tr><td><center>'.$query_execute['Title'].'</center></td>
  <td><center>'.$query_execute['Type'].'</center></td>
  <td><center>'.$query_execute['Area'].'</center></td>
  <td><center>'.$query_execute['Oinfo'].'</center></td>
  <td><center>ACCEPTED/PENDING</center></td>
  <td><center><a href="iLimit5/Docs/planc.php">Design tool</a></center></td></tr></table>';
}
}
else
{
echo 'No work has been posted';
}


?>
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