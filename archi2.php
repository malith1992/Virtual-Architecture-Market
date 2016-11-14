<?php include "connect2.php"; 


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
    <div class="col-md-2 "><button type="button" class="btn btn-info">Login</button>
        <button type="button" class="btn btn-success">Signup</button>
    </div>
</div>
<hr>
    <div class="row"></div>

<div class="row">
  <div class="col-md-4">
      <h4><center>WELCOME!</center></h4>
    </div>
  <div class="col-md-2">
    <input type="button" value="Home" class="btn">
  </div>
  <div class="col-md-2">
    <input type="button" value="About Us" class="btn">
  </div>
  <div class="col-md-2">
    <input type="button" value="Services" class="btn">
  </div>
  <div class="col-md-2">
    <input type="button" value="Contact" class="btn">
  </div>
</div>     
</div> 

<div class="well">
<div class="row">
    <div class="col-md-4">
    <img src="Resources/Images/house1.jpg" class="img-rounded" alt="HouseExterior" width="300" height="200">
    </div>
    <div class="col-md-8">
     <div class="row">
         <h1><center><code><?=$_SESSION['Firstname']?></code> <code><?=$_SESSION['Lastname'] ?></code></center></h1>
        </div>
        <hr>
        <div class="row"></div>
     <div class="row">   
    <div class="col-md-2">
    <input type="button" value="Home" class="btn">
  </div>
  <div class="col-md-2">
    <input type="button" value="Profile" class="btn">
  </div>
  <div class="col-md-2">
    <input type="button" value="Work" class="btn">
  </div>
  <div class="col-md-2">
    <input type="button" value="Contact" class="btn">
         </div></div>
    </div></div>
</div>
     
<div class="well">
<div class="row">
    <div class="col-md-8">
        <b>COLLEGE</b><br>
        <?=$_SESSION['College']?>

    </div>
    <div class="col-md-4">
        <b>BIRTH DATE :</b> <?=$_SESSION['DoB']?> <br>
        <b>BIRTH PLACE :</b><?=$_SESSION['Birthplace']?>
</div>
</div><hr>

<div class="row">
    <b>&nbsp;&nbsp;&nbsp;&nbsp;UNIVERSITY</b><br>
    <?=$_SESSION['University']?>
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
       <li><?=$_SESSION['Awards1']?></li>
       <li><?=$_SESSION['Awards2']?></li>
    </ul>
    <hr>
</div>

<div class="row">
    <b>&nbsp;&nbsp;&nbsp;&nbsp;Member of the Sri Lanka Institute of Architects since&nbsp;<?=$_SESSION['Membership_Year'] ?></b><br>
    <hr>
</div>
    
<div class="row">
     <b>&nbsp;&nbsp;&nbsp;&nbsp;PHILOSOPHY</b><br>
     <?=$_SESSION['Philosophy']?>
    <hr>
</div>

<div class="row">
     <b>&nbsp;&nbsp;&nbsp;&nbsp;OTHER INFO</b><br>
     <?=$_SESSION['Other_Info']?>
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