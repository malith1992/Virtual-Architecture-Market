<?php include "connect2.php";  ?>

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
		 <br><center>Occupation: <code><?=$_SESSION['Occupation']?></code></center></div>
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
    
<div class="container" id="wrap">
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <form action="customerposting.php" method="post" accept-charset="utf-8" class="form" role="form">   
        <legend><center><h1>Post Work</h1></center></legend>
            <h4><center>Fill the form below to post a work.</center></h4>
                    
<div class="row">
    <div class="col-xs-6 col-md-6">
         <label>Title</label>
    <input type="text" name="title" value="" class="form-control input-lg"  required/>                        
    </div></div>
   <br>         
    
    <br>
    <div class="row">
    <div class="col-xs-6 col-md-6">
         <label>Type </label>    
        <div class="form-group">
        <select name="type" class="form-control" onchange="getdata(this.value)">
            <option value=''>Select one</option>
            <option value='house'>House</option>
            <option value='Build'>Building</option>
            </select></div>
        
        <br><br>
        
        <label>Select Architect </label> 
        <div class="form-group">
         <select class="form-control" id="secondDrop">
             <option>Select</option>
            </select></div>
       </div> 
    
        </div>
    <br><br>
    
    <div class="row">
     <div class="col-xs-6 col-md-6">
          <label>Land Area (in Square Feets) </label>
   <input type="text" name="area" value="" class="form-control input-lg"  required/>
   </div></div>
    
    <br><br>
            
    <div class="row">
    <div class="col-xs-6 col-md-6">
    <label>Other Information</label>
      <textarea class="form-control " rows="6" id="comment" name="info"></textarea>
        </div></div>
            
        <br><br>

              
    <button class="btn  btn-lg btn-primary  signup-btn" type="submit"> Post</button>
    </form>          
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

<script> 


$(document).ready(function(){
 
$("#secondDrop").prop('disabled', true);    
    
    
});
    
    
function getdata(value){
$.ajax({
    url: "getdata.php",
	cache:false,
	Type:"GET",
    dataType: "json",
	data:{category:value},
    success: function(data){
       
        var optionstring;
      for(var i=0; i<data.length; i++){
      optionstring += "<option value="+data[i]+">"+data[i]+"</option>";
      }
        $("#secondDrop").html(optionstring);
	    $("#secondDrop").prop('disabled', false);    
        
    }
	});
}    
</script>  
   

  
</body>
</html>