<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Plan Editor</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="JQrotate.js"></script>
<script src="html2canvas.js"></script>
<script> 


$(document).ready(function() {

    $(".plan1").click(function() {								//medium move
        // unselect others
        $(".plan1").removeClass("selected");
        // reselect this one
        $(this).addClass("selected");
    });

    $("#b1").click(function() {
        // animate selected
		var inpID = $(".plan1.selected").attr('id').slice(-1);
		var cnt = $('#lf'+inpID).val();
		cnt=parseInt(cnt)+20;
		$('#lf'+inpID).val(cnt);

        $(".plan1.selected").animate({left:'+=20px'});
		
    });
});



$(document).ready(function() {

    $(".plan1").click(function() {
        $(".plan1").removeClass("selected");
        $(this).addClass("selected");
    });

    $("#b3").click(function() {
		var inpID = $(".plan1.selected").attr('id').slice(-1);
		var cnt = $('#lf'+inpID).val();
		cnt=parseInt(cnt)-20;
		$('#lf'+inpID).val(cnt);
        $(".plan1.selected").animate({left:'-=20px'});
    });
});


$(document).ready(function() {

    $(".plan1").click(function() {
        $(".plan1").removeClass("selected");
        $(this).addClass("selected");
    });

    $("#b6").click(function() {
		var inpID = $(".plan1.selected").attr('id').slice(-1);
		var cnt = $('#tf'+inpID).val();
		cnt=parseInt(cnt)+20;
		$('#tf'+inpID).val(cnt);
        $(".plan1.selected").animate({top:'+=20px'});
    });
});


$(document).ready(function() {

    $(".plan1").click(function() {
        $(".plan1").removeClass("selected");
        $(this).addClass("selected");
    });

    $("#b5").click(function() {
		var inpID = $(".plan1.selected").attr('id').slice(-1);
		var cnt = $('#tf'+inpID).val();
		cnt=parseInt(cnt)-20;
		$('#tf'+inpID).val(cnt);
        $(".plan1.selected").animate({top:'-=20px'});
    });
});

$(document).ready(function() {										//large move

    $(".plan1").click(function() {
        // unselect others
        $(".plan1").removeClass("selected");
        // reselect this one
        $(this).addClass("selected");
    });

    $("#b14").click(function() {
        // animate selected
		var inpID = $(".plan1.selected").attr('id').slice(-1);
		var cnt = $('#lf'+inpID).val();
		cnt=parseInt(cnt)+60;
		$('#lf'+inpID).val(cnt);
        $(".plan1.selected").animate({left:'+=60px'});
    });
});



$(document).ready(function() {

    $(".plan1").click(function() {
        $(".plan1").removeClass("selected");
        $(this).addClass("selected");
    });

    $("#b15").click(function() {
		var inpID = $(".plan1.selected").attr('id').slice(-1);
		var cnt = $('#lf'+inpID).val();
		cnt=parseInt(cnt)-60;
		$('#lf'+inpID).val(cnt);
        $(".plan1.selected").animate({left:'-=60px'});
    });
});


$(document).ready(function() {

    $(".plan1").click(function() {
        $(".plan1").removeClass("selected");
        $(this).addClass("selected");
    });

    $("#b16").click(function() {
		var inpID = $(".plan1.selected").attr('id').slice(-1);
		var cnt = $('#tf'+inpID).val();
		cnt=parseInt(cnt)+60;
		$('#tf'+inpID).val(cnt);
        $(".plan1.selected").animate({top:'+=60px'});
    });
});


$(document).ready(function() {

    $(".plan1").click(function() {
        $(".plan1").removeClass("selected");
        $(this).addClass("selected");
    });

    $("#b17").click(function() {
		var inpID = $(".plan1.selected").attr('id').slice(-1);
		var cnt = $('#tf'+inpID).val();
		cnt=parseInt(cnt)-60;
		$('#tf'+inpID).val(cnt);
        $(".plan1.selected").animate({top:'-=60px'});
    });
});


$(document).ready(function() {										//small move

    $(".plan1").click(function() {
        // unselect others
        $(".plan1").removeClass("selected");
        // reselect this one
        $(this).addClass("selected");
    });

    $("#b18").click(function() {
        // animate selected
		var inpID = $(".plan1.selected").attr('id').slice(-1);
		var cnt = $('#lf'+inpID).val();
		cnt=parseInt(cnt)+5;
		$('#lf'+inpID).val(cnt);
        $(".plan1.selected").animate({left:'+=5px'});
    });
});



$(document).ready(function() {

    $(".plan1").click(function() {
        $(".plan1").removeClass("selected");
        $(this).addClass("selected");
    });

    $("#b19").click(function() {
		var inpID = $(".plan1.selected").attr('id').slice(-1);
		var cnt = $('#lf'+inpID).val();
		cnt=parseInt(cnt)-5;
		$('#lf'+inpID).val(cnt);
        $(".plan1.selected").animate({left:'-=5px'});
    });
});


$(document).ready(function() {

    $(".plan1").click(function() {
        $(".plan1").removeClass("selected");
        $(this).addClass("selected");
    });

    $("#b20").click(function() {
		var inpID = $(".plan1.selected").attr('id').slice(-1);
		var cnt = $('#tf'+inpID).val();
		cnt=parseInt(cnt)+5;
		$('#tf'+inpID).val(cnt);
        $(".plan1.selected").animate({top:'+=5px'});
    });
});


$(document).ready(function() {

    $(".plan1").click(function() {
        $(".plan1").removeClass("selected");
        $(this).addClass("selected");
    });

    $("#b21").click(function() {
		var inpID = $(".plan1.selected").attr('id').slice(-1);
		var cnt = $('#tf'+inpID).val();
		cnt=parseInt(cnt)-5;
		$('#tf'+inpID).val(cnt);
        $(".plan1.selected").animate({top:'-=5px'});
    });
});

$(window).load(function() {											//full rotate
	
	$(".plan1").click(function() {
        $(".plan1").removeClass("selected");
        $(this).addClass("selected");
    });
	
    $("body").on("click", "#b2", function() {
        $(".plan1.selected").rotate(a());
    });
    nextAngle = 0;
    function a() {
        nextAngle += 90;
        if (nextAngle >= 360) nextAngle = 0;
        return nextAngle;
    }
});

$(window).load(function() {										
	
	$(".plan1").click(function() {
        $(".plan1").removeClass("selected");
        $(this).addClass("selected");
    });
	
    $("body").on("click", "#b4", function() {
        $(".plan1.selected").rotate(a());
    });
    nextAngle = 0;
    function a() {
        nextAngle -= 90;
        if (nextAngle >= 360) nextAngle = 0;
        return nextAngle;
    }
});

$(window).load(function() {											//half rotate
	
	$(".plan1").click(function() {
        $(".plan1").removeClass("selected");
        $(this).addClass("selected");
    });
	
    $("body").on("click", "#b22", function() {
        $(".plan1.selected").rotate(a());
    });
    nextAngle = 0;
    function a() {
        nextAngle += 45;
        if (nextAngle >= 360) nextAngle = 0;
        return nextAngle;
    }
});

$(window).load(function() {										
	
	$(".plan1").click(function() {
        $(".plan1").removeClass("selected");
        $(this).addClass("selected");
    });
	
    $("body").on("click", "#b23", function() {
        $(".plan1.selected").rotate(a());
    });
    nextAngle = 0;
    function a() {
        nextAngle -= 45;
        if (nextAngle >= 360) nextAngle = 0;
        return nextAngle;
    }
});

$(document).ready(function() {										//medium size

    $(".plan1").click(function() {
        $(".plan1").removeClass("selected");
        $(this).addClass("selected");
    });

    $("#b8").click(function() {
		var inpID = $(".plan1.selected").attr('id').slice(-1);
		var cnt = $('#hf'+inpID).val();
		cnt=parseInt(cnt)+20;
		$('#hf'+inpID).val(cnt);
        $(".plan1.selected").animate({height:'+=20px'});
    });
});


$(document).ready(function() {

    $(".plan1").click(function() {
        $(".plan1").removeClass("selected");
        $(this).addClass("selected");
    });

    $("#b9").click(function() {
		var inpID = $(".plan1.selected").attr('id').slice(-1);
		var cnt = $('#hf'+inpID).val();
		cnt=parseInt(cnt)-20;
		$('#hf'+inpID).val(cnt);
        $(".plan1.selected").animate({height:'-=20px'});
    });
});


$(document).ready(function() {

    $(".plan1").click(function() {
        $(".plan1").removeClass("selected");
        $(this).addClass("selected");
    });

    $("#b10").click(function() {
		var inpID = $(".plan1.selected").attr('id').slice(-1);
		var cnt = $('#wf'+inpID).val();
		cnt=parseInt(cnt)+20;
		$('#wf'+inpID).val(cnt);
        $(".plan1.selected").animate({width:'+=20px'});
    });
});


$(document).ready(function() {

    $(".plan1").click(function() {
        $(".plan1").removeClass("selected");
        $(this).addClass("selected");
    });

    $("#b11").click(function() {
		var inpID = $(".plan1.selected").attr('id').slice(-1);
		var cnt = $('#wf'+inpID).val();
		cnt=parseInt(cnt)-20;
		$('#wf'+inpID).val(cnt);
        $(".plan1.selected").animate({width:'-=20px'});
    });
});


$(document).ready(function() {

    $(".plan1").click(function() {
        $(".plan1").removeClass("selected");
        $(this).addClass("selected");
    });

    $("#b12").click(function() {
		var inpID = $(".plan1.selected").attr('id').slice(-1);
		var cnt = $('#hf'+inpID).val();
		var cnt2 = $('#wf'+inpID).val();
		cnt=parseInt(cnt)+20;
		cnt2=parseInt(cnt2)+20;
		$('#hf'+inpID).val(cnt);
		$('#wf'+inpID).val(cnt2);
        $(".plan1.selected").animate({height:'+=20px'});
		$(".plan1.selected").animate({width:'+=20px'});
    });
});


$(document).ready(function() {

    $(".plan1").click(function() {
        $(".plan1").removeClass("selected");
        $(this).addClass("selected");
    });

    $("#b13").click(function() {
		var inpID = $(".plan1.selected").attr('id').slice(-1);
		var cnt = $('#hf'+inpID).val();
		var cnt2 = $('#wf'+inpID).val();
		cnt=parseInt(cnt)-20;
		cnt2=parseInt(cnt2)-20;
		$('#hf'+inpID).val(cnt);
		$('#wf'+inpID).val(cnt2);
        $(".plan1.selected").animate({height:'-=20px'});
		$(".plan1.selected").animate({width:'-=20px'});
    });
});

$(document).ready(function() {										//Small size

    $(".plan1").click(function() {
        $(".plan1").removeClass("selected");
        $(this).addClass("selected");
    });

    $("#b24").click(function() {
		var inpID = $(".plan1.selected").attr('id').slice(-1);
		var cnt = $('#hf'+inpID).val();
		cnt=parseInt(cnt)+5;
		$('#hf'+inpID).val(cnt);
        $(".plan1.selected").animate({height:'+=5px'});
    });
});


$(document).ready(function() {

    $(".plan1").click(function() {
        $(".plan1").removeClass("selected");
        $(this).addClass("selected");
    });

    $("#b25").click(function() {
		var inpID = $(".plan1.selected").attr('id').slice(-1);
		var cnt = $('#hf'+inpID).val();
		cnt=parseInt(cnt)-5;
		$('#hf'+inpID).val(cnt);
        $(".plan1.selected").animate({height:'-=5px'});
    });
});


$(document).ready(function() {

    $(".plan1").click(function() {
        $(".plan1").removeClass("selected");
        $(this).addClass("selected");
    });

    $("#b26").click(function() {
		var inpID = $(".plan1.selected").attr('id').slice(-1);
		var cnt = $('#wf'+inpID).val();
		cnt=parseInt(cnt)+5;
		$('#wf'+inpID).val(cnt);
        $(".plan1.selected").animate({width:'+=5px'});
    });
});


$(document).ready(function() {

    $(".plan1").click(function() {
        $(".plan1").removeClass("selected");
        $(this).addClass("selected");
    });

    $("#b27").click(function() {
		var inpID = $(".plan1.selected").attr('id').slice(-1);
		var cnt = $('#wf'+inpID).val();
		cnt=parseInt(cnt)-5;
		$('#wf'+inpID).val(cnt);
        $(".plan1.selected").animate({width:'-=5px'});
    });
});


$(document).ready(function() {

    $(".plan1").click(function() {
        $(".plan1").removeClass("selected");
        $(this).addClass("selected");
    });

    $("#b28").click(function() {
		var inpID = $(".plan1.selected").attr('id').slice(-1);
		var cnt = $('#hf'+inpID).val();
		var cnt2 = $('#wf'+inpID).val();
		cnt=parseInt(cnt)+5;
		cnt2=parseInt(cnt2)+5;
		$('#hf'+inpID).val(cnt);
		$('#wf'+inpID).val(cnt2);
        $(".plan1.selected").animate({height:'+=5px'});
		$(".plan1.selected").animate({width:'+=5px'});
    });
});


$(document).ready(function() {

    $(".plan1").click(function() {
        $(".plan1").removeClass("selected");
        $(this).addClass("selected");
    });

    $("#b29").click(function() {
		var inpID = $(".plan1.selected").attr('id').slice(-1);
		var cnt = $('#hf'+inpID).val();
		var cnt2 = $('#wf'+inpID).val();
		cnt=parseInt(cnt)-5;
		cnt2=parseInt(cnt2)-5;
		$('#hf'+inpID).val(cnt);
		$('#wf'+inpID).val(cnt2);
        $(".plan1.selected").animate({height:'-=5px'});
		$(".plan1.selected").animate({width:'-=5px'});
    });
});

$(document).ready(function() {										//Large size

    $(".plan1").click(function() {
        $(".plan1").removeClass("selected");
        $(this).addClass("selected");
    });

    $("#b30").click(function() {
		var inpID = $(".plan1.selected").attr('id').slice(-1);
		var cnt = $('#hf'+inpID).val();
		cnt=parseInt(cnt)+60;
		$('#hf'+inpID).val(cnt);
        $(".plan1.selected").animate({height:'+=60px'});
    });
});


$(document).ready(function() {

    $(".plan1").click(function() {
        $(".plan1").removeClass("selected");
        $(this).addClass("selected");
    });

    $("#b31").click(function() {
		var inpID = $(".plan1.selected").attr('id').slice(-1);
		var cnt = $('#hf'+inpID).val();
		cnt=parseInt(cnt)-60;
		$('#hf'+inpID).val(cnt);
        $(".plan1.selected").animate({height:'-=60px'});
    });
});


$(document).ready(function() {

    $(".plan1").click(function() {
        $(".plan1").removeClass("selected");
        $(this).addClass("selected");
    });

    $("#b32").click(function() {
		var inpID = $(".plan1.selected").attr('id').slice(-1);
		var cnt = $('#wf'+inpID).val();
		cnt=parseInt(cnt)+60;
		$('#wf'+inpID).val(cnt);
        $(".plan1.selected").animate({width:'+=60px'});
    });
});


$(document).ready(function() {

    $(".plan1").click(function() {
        $(".plan1").removeClass("selected");
        $(this).addClass("selected");
    });

    $("#b33").click(function() {
		var inpID = $(".plan1.selected").attr('id').slice(-1);
		var cnt = $('#wf'+inpID).val();
		cnt=parseInt(cnt)-60;
		$('#wf'+inpID).val(cnt);
        $(".plan1.selected").animate({width:'-=60px'});
    });
});


$(document).ready(function() {

    $(".plan1").click(function() {
        $(".plan1").removeClass("selected");
        $(this).addClass("selected");
    });

    $("#b34").click(function() {
		var inpID = $(".plan1.selected").attr('id').slice(-1);
		var cnt = $('#hf'+inpID).val();
		var cnt2 = $('#wf'+inpID).val();
		cnt=parseInt(cnt)+60;
		cnt2=parseInt(cnt2)+60;
		$('#hf'+inpID).val(cnt);
		$('#wf'+inpID).val(cnt2);
        $(".plan1.selected").animate({height:'+=60px'});
		$(".plan1.selected").animate({width:'+=60px'});
    });
});


$(document).ready(function() {

    $(".plan1").click(function() {
        $(".plan1").removeClass("selected");
        $(this).addClass("selected");
    });

    $("#b35").click(function() {
		var inpID = $(".plan1.selected").attr('id').slice(-1);
		var cnt = $('#hf'+inpID).val();
		var cnt2 = $('#wf'+inpID).val();
		cnt=parseInt(cnt)-60;
		cnt2=parseInt(cnt2)-60;
		$('#hf'+inpID).val(cnt);
		$('#wf'+inpID).val(cnt2);
        $(".plan1.selected").animate({height:'-=60px'});
		$(".plan1.selected").animate({width:'-=60px'});
    });
});

$(document).ready(function() {													//remove room

    $(".plan1").click(function() {
        $(".plan1").removeClass("selected");
        $(this).addClass("selected");
    });

    $("#rem").click(function() {
        $(".plan1.selected").hide();
    });
});


</script>

<script>
            function validate(form){
            //get form id
            var  formID = form.id;
            var formDetails = $('#'+formID);
                $.ajax({
                    type: "POST",
                    url: 'saveimage3.php',
                    data: formDetails.serialize(),
                    success: function (data) {  
                        // log result
                        console.log(data);
                        //for closing popup
                          location = "selectversion.php";
                        //window.close()
                    },
                    error: function(jqXHR, text, error){
                    // Displaying if there are any errors
                    console.log(error);
                    }
                });
            return false;
        }
            //this function will create loop for all forms in page
            function submitAll(){
                    for(var i=0, n=document.forms.length; i<n; i++){
                        validate(document.forms[i]);
                    }
				
                }
</script>

<script>
function selectversion(){
	window.location = "selectversion.php";
}
</script>

<script>
function get3D(){
	window.location = "3D/House1.html";
}
</script>

<script>

function genScreenshot() {
    html2canvas($("#canarea"), {
      onrendered: function(canvas) {
      $('#box1').html("");
			$('#box1').append(canvas);
      
      if (navigator.userAgent.indexOf("MSIE ") > 0 || 
					navigator.userAgent.match(/Trident.*rv\:11\./)) 
			{
      	var blob = canvas.msToBlob();
        window.navigator.msSaveBlob(blob,'Test file.png');
      }
      else {
        $('#test').attr('href', canvas.toDataURL("image/png"));
        $('#test').attr('download','Test file.png');
        $('#test')[0].click();
      }
      
      
      }
    });
}

</script> 



<style>

.active {
  background: rgba(52, 152, 219,0.6); 
}

img, input{display:block;}

.buttons {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 12px 12px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
.buttons:hover {
    opacity : 0.5;
}

img:hover{
opacity : 0.4;
}
table{width:40%; border-collapse:collapse;}

#table1{background-color:#00ff66;}
#table2{background-color:#ffff00;}
#table3{background-color:#ff4433;}
#table4{background-color:#00aaff;}

.selected { border: 1px solid blue }

canvas {
    max-width: 100%;
    max-height: 100%;
}

#box1 {
  width:400px;
  height:200px;
  border-style: solid;
  border-width: 2px;
}


.modal {										
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}



.modal2 {										
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 60%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content2 {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close2 {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close2:hover,
.close2:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header2 {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

.modal-body2 {padding: 2px 16px;}

.modal-footer2 {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}


.close3:hover,
.close3:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header3 {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}


.close4:hover,
.close4:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header4 {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}
</style>

</head>

<body background="grid2.jpg" style="background-repeat:no-repeat;">

<table>
<tr>
<td id="canarea">

<div id="canarea" style="width:730px; margin-left:20px;">

<?php

$servername = "localhost";
$username = "root";
$password = "78T36d9peFpG7MZy";
$dbname = "vamedited";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$planid=$_POST["planid"];
$version=$_POST["version"];

$sql = "SELECT * FROM modified_plan WHERE planID='$planid' AND version='$version' ";
$result = $conn->query($sql);
$idc=1;

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		
		echo '<img class="plan1" id="'.$row["imageID"].'" style="position:absolute; top:'.$row["top"].'px; left:'.$row["left"].'px;" src="'.$row["url"].'" width="'.$row["width"].'" height="'.$row["height"].'" />';
		
		$newver=$row["version"];
		$newveri=intval($newver)+1;
		
		echo '<form action="saveimage3.php" method="post" id="form'.$idc.'" class="vform">';
		echo '<input type="hidden" name="planid" value="'.$row["planID"].'"/>';
		echo '<input type="hidden" name="version" value="'.$newveri.'"/>';
		echo '<input type="hidden" name="imageid" value="'.$row["imageID"].'"/>';
		echo '<input type="hidden" name="url" value="'.$row["url"].'"/>';
		
		echo '<input type="hidden" name="left" id="lf'.$row["imageID"].'" value="'.$row["left"].'"/>';
		echo '<input type="hidden" name="top" id="tf'.$row["imageID"].'" value="'.$row["top"].'"/>';
		echo '<input type="hidden" name="width" id="wf'.$row["imageID"].'" value="'.$row["width"].'"/>';
		echo '<input type="hidden" name="height" id="hf'.$row["imageID"].'" value="'.$row["height"].'"/>';
		echo '</form>';
		
		$idc++;
	}
} else {
    echo "";
}
$conn->close();


?>

</div>

</td>
<td>

<div style="width:50%;">
<table  style="background-color:white; margin:10px; ">
<tr>
<td>

<table id="table1" >
<tr>
	<td>Move</td>
	<td>&nbsp</td>
	<td align="center"><button id="b5" >&nbsp&nbspUp&nbsp&nbsp</button></td>
	<td>&nbsp</td>
	<td style="background-color:white;">&nbsp</td>
	<td>Move</td>
	<td>&nbsp</td>
	<td align="center"><button id="b21" >&nbsp&nbspUp&nbsp&nbsp</button></td>
	<td>&nbsp</td>
	<td style="background-color:white;">&nbsp</td>
	<td>Move</td>
	<td>&nbsp</td>
	<td align="center"><button id="b17" >&nbsp&nbspUp&nbsp&nbsp</button></td>
	<td>&nbsp</td>
</tr>
<tr>
	<td>Medium</td>
	<td align="right"><button id="b3" onclick="onClick()">Left</button></td>
	<td align="center"><button id="b7">Reset</button></td>
	<td align="left"><button id="b1">Right</button></td>
	<td style="background-color:white;">&nbsp</td>
	<td>Small</td>
	<td align="right"><button id="b19">Left</button></td>
	<td align="center"><button id="b7">Reset</button></td>
	<td align="left"><button id="b18">Right</button></td>
	<td style="background-color:white;">&nbsp</td>
	<td>Large</td>
	<td align="right"><button id="b15">Left</button></td>
	<td align="center"><button id="b7">Reset</button></td>
	<td align="left"><button id="b14">Right</button></td>
</tr>
<tr>
	<td>&nbsp</td>
	<td>&nbsp</td>
	<td align="center"><button id="b6">Down</button></td>
	<td>&nbsp</td>
	<td style="background-color:white;">&nbsp</td>
	<td>&nbsp</td>
	<td>&nbsp</td>
	<td align="center"><button id="b20">Down</button></td>
	<td>&nbsp</td>
	<td style="background-color:white;">&nbsp</td>
	<td>&nbsp</td>
	<td>&nbsp</td>
	<td align="center"><button id="b16">Down</button></td>
	<td>&nbsp</td>
</tr>

</table>
<br/><br/>
<table id="table2">
<tr>
	<td>Full Rotate</td>
	<td>&nbsp</td>
	<td align="center"><button id="b4">Rotate Left</button></td>
	<td align="center"><button id="b2">Rotate Right</button></td>
	<td style="background-color:white;">&nbsp</td>
	<td>Half Rotate</td>
	<td>&nbsp</td>
	<td align="center"><button id="b23">Rotate Left</button></td>
	<td align="center"><button id="b22">Rotate Right</button></td>
</tr>
</table>
<br/><br/>
<table id="table3">
<tr>
	<td>Medium Size (S)</td>
	<td></td>
	<td align="center"><button id="b8">Height +</button></td>
	<td align="center"><button id="b9">Height -</button></td>
	<td style="background-color:white;">&nbsp</td>
	<td>Small Size (S)</td>
	<td></td>
	<td align="center"><button id="b24">Height +</button></td>
	<td align="center"><button id="b25">Height -</button></td>
	<td style="background-color:white;">&nbsp</td>
	<td>Large Size (S)</td>
	<td></td>
	<td align="center"><button id="b30">Height +</button></td>
	<td align="center"><button id="b31">Height -</button></td>
</tr>
<tr>
	<td>&nbsp</td>
	<td></td>
	<td align="center"><button id="b10">Width +</button></td>
	<td align="center"><button id="b11">Width -</button></td>
	<td style="background-color:white;">&nbsp</td>
	<td>&nbsp</td>
	<td></td>
	<td align="center"><button id="b26">Width +</button></td>
	<td align="center"><button id="b27">Width -</button></td>
	<td style="background-color:white;">&nbsp</td>
	<td>&nbsp</td>
	<td></td>
	<td align="center"><button id="b32">Width +</button></td>
	<td align="center"><button id="b33">Width -</button></td>
</tr>

<tr>
	<td style="background-color:white;">&nbsp</td>
	<td style="background-color:white;">&nbsp</td>
	<td style="background-color:white;">&nbsp</td>
	<td style="background-color:white;">&nbsp</td>
	<td style="background-color:white;">&nbsp</td>
	<td style="background-color:white;">&nbsp</td>
	<td style="background-color:white;">&nbsp</td>
	<td style="background-color:white;">&nbsp</td>
	<td style="background-color:white;">&nbsp</td>
	<td style="background-color:white;">&nbsp</td>
	<td style="background-color:white;">&nbsp</td>
	<td style="background-color:white;">&nbsp</td>
	<td style="background-color:white;">&nbsp</td>
	<td style="background-color:white;">&nbsp</td>
</tr>

<tr>
	<td>Medium Size (F)</td>
	<td></td>
	<td align="center"><button id="b12">Size +</button></td>
	<td align="center"><button id="b13">Size -</button></td>
	<td style="background-color:white;">&nbsp</td>
	<td>Small Size (F)</td>
	<td></td>
	<td align="center"><button id="b28">Size +</button></td>
	<td align="center"><button id="b29">Size -</button></td>
	<td style="background-color:white;">&nbsp</td>
	<td>Large Size (F)</td>
	<td></td>
	<td align="center"><button id="b34">Size +</button></td>
	<td align="center"><button id="b35">Size -</button></td>
</tr>

</table>
<br/>
<!--
<table id="table4">
<tr>
	<td>Add</td>
	<td>&nbsp</td>
	<td align="center"><button id="add">Room</button></td>
	<td style="background-color:white;">&nbsp</td>
	<td>Remove</td>
	<td>&nbsp</td>
	<td align="center"><button id="rem">Remove</button></td>
</tr>
<tr>
	<td>&nbsp</td>
	<td>&nbsp</td>
	<td align="center"><button id="add2">Door</button></td>
	<td style="background-color:white;">&nbsp</td>
	<td>&nbsp</td>
	<td>&nbsp</td>
	<td>&nbsp</button></td>
	
</tr>
<tr>
	<td>&nbsp</td>
	<td>&nbsp</td>
	<td align="center"><button id="add3">Window</button></td>
	<td style="background-color:white;">&nbsp</td>
	<td>&nbsp</td>
	<td>&nbsp</td>
	<td>&nbsp</button></td>
	
</tr>
</table>
-->
</td>
</tr>
</table>

<button class="buttons" id="activeall" onclick="submitAll()">Save Version</button>&nbsp&nbsp
<button class="buttons" id="selectv" onclick="selectversion()">Select Version</button>&nbsp&nbsp
<button class="buttons" id="selectv" onclick="get3D()">Get 3D</button><br/><br/>
<font color="blue" size="6"> Finished?</font><br/>
&nbsp&nbsp&nbsp<button onclick="genScreenshot();" class="buttons">Save image</button>&nbsp&nbsp
<button class="buttons" id="myBtn">Open Modal</button><br/><br/>

<a id="test"></a>

</div>
</td>
</tr>
</table>


<div id="box2"></div>


<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span id="close" class="close">×</span>
      <h2>Edited Plan</h2>
    </div>
    <div class="modal-body">
      <table>
		<tr>
		<td>
		<div id="box1"></div></td>
		<td></td>
		</tr>
	  </table>
      
    </div>
    <div class="modal-footer">
      <h3>Image has been saved!</h3>
    </div>
  </div>

</div>



<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementById("close");

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


<!-- The Modal -->
<div id="addobj" class="modal2">

  <!-- Modal content -->
  <div class="modal-content2">
    <div class="modal-header2">
      <span id="close2" class="close2">×</span>
      <h2></h2>
    </div>
    <div class="modal-body2">
		<form action="saveimage2.php" method="post">

<table>
<tr>
	<td>Image *</td>
	<td><input type="text" name="img1" id="img1" placeholder="Image URL" /></td>
</tr>
<tr>
	<td>ID *</td>
	<td><input type="text" name="id" id="id" placeholder="ID" /></td>
</tr>
<tr>
	<td>Height *</td>
	<td><input type="number" name="height" id="height" placeholder="Height" /></td>
</tr>
<tr>
	<td>width *</td>
	<td><input type="number" name="width" id="width" placeholder="Width" /></td>
</tr>
<tr>
	<td>Top</td>
	<td><input type="number" name="top" id="top" placeholder="Top" value="0"/></td>
</tr>
<tr>
	<td>Bottom</td>
	<td><input type="number" name="bottom" id="bottom" placeholder="Bottom" value="0"/></td>
</tr>
<tr>
	<td>Left</td>
	<td><input type="number" name="left" id="left" placeholder="Left" value="0"/></td>
</tr>
<tr>
	<td>Right</td>
	<td><input type="number" name="right" id="right" placeholder="Right" value="0"/></td>
</tr>
<tr>
	<td><input type="submit" name="sub" id="sub" value="Add" /></td>
	<td>&nbsp</td>
</tr>


</table>

</form>
    </div>
    <div class="modal-footer2">
      <h3></h3>
    </div>
  </div>

</div>

<script>
// Get the modal
var modal2 = document.getElementById('addobj');

// Get the button that opens the modal
var btn2 = document.getElementById("add");

// Get the <span> element that closes the modal
var span2 = document.getElementById("close2");

// When the user clicks the button, open the modal
btn2.onclick = function() {
    modal2.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span2.onclick = function() {
    modal2.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
}
</script>


<!-- The Modal -->
<div id="addobj" class="modal2">

  <!-- Modal content -->
  <div class="modal-content2">
    <div class="modal-header3">
      <span id="close2" class="close3">×</span>
      <h2></h2>
    </div>
    <div class="modal-body2">
    <form action="saveimage2.php" method="post">

<table>
<tr>
	<td>Image *</td>
	<td><input type="text" name="img1" id="img1" placeholder="Image URL" /></td>
</tr>
<tr>
	<td>ID *</td>
	<td><input type="text" name="id" id="id" placeholder="ID" /></td>
</tr>
<tr>
	<td>Height *</td>
	<td><input type="number" name="height" id="height" placeholder="Height" /></td>
</tr>
<tr>
	<td>width *</td>
	<td><input type="number" name="width" id="width" placeholder="Width" /></td>
</tr>
<tr>
	<td>Top</td>
	<td><input type="number" name="top" id="top" placeholder="Top" value="0"/></td>
</tr>
<tr>
	<td>Bottom</td>
	<td><input type="number" name="bottom" id="bottom" placeholder="Bottom" value="0"/></td>
</tr>
<tr>
	<td>Left</td>
	<td><input type="number" name="left" id="left" placeholder="Left" value="0"/></td>
</tr>
<tr>
	<td>Right</td>
	<td><input type="number" name="right" id="right" placeholder="Right" value="0"/></td>
</tr>
<tr>
	<td><input type="submit" name="sub" id="sub" value="Add" /></td>
	<td>&nbsp</td>
</tr>


</table>

</form>
    </div>
    <div class="modal-footer2">
      <h3></h3>
    </div>
  </div>

</div>

<script>
// Get the modal
var modal2 = document.getElementById('addobj');

// Get the button that opens the modal
var btn2 = document.getElementById("add2");

// Get the <span> element that closes the modal
var span2 = document.getElementById("close2");

// When the user clicks the button, open the modal
btn2.onclick = function() {
    modal2.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span2.onclick = function() {
    modal2.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
}
</script>


<!-- The Modal -->
<div id="addobj" class="modal2">

  <!-- Modal content -->
  <div class="modal-content2">
    <div class="modal-header4">
      <span id="close2" class="close4">×</span>
      <h2></h2>
    </div>
    <div class="modal-body2">
    <form action="saveimage2.php" method="post">

<table>
<tr>
	<td>Image *</td>
	<td><input type="text" name="img1" id="img1" placeholder="Image URL" /></td>
</tr>
<tr>
	<td>ID *</td>
	<td><input type="text" name="id" id="id" placeholder="ID" /></td>
</tr>
<tr>
	<td>Height *</td>
	<td><input type="number" name="height" id="height" placeholder="Height" /></td>
</tr>
<tr>
	<td>width *</td>
	<td><input type="number" name="width" id="width" placeholder="Width" /></td>
</tr>
<tr>
	<td>Top</td>
	<td><input type="number" name="top" id="top" placeholder="Top" value="0"/></td>
</tr>
<tr>
	<td>Bottom</td>
	<td><input type="number" name="bottom" id="bottom" placeholder="Bottom" value="0"/></td>
</tr>
<tr>
	<td>Left</td>
	<td><input type="number" name="left" id="left" placeholder="Left" value="0"/></td>
</tr>
<tr>
	<td>Right</td>
	<td><input type="number" name="right" id="right" placeholder="Right" value="0"/></td>
</tr>
<tr>
	<td><input type="submit" name="sub" id="sub" value="Add" /></td>
	<td>&nbsp</td>
</tr>


</table>

</form>
    </div>
    <div class="modal-footer2">
      <h3></h3>
    </div>
  </div>

</div>

<script>
// Get the modal
var modal2 = document.getElementById('addobj');

// Get the button that opens the modal
var btn2 = document.getElementById("add3");

// Get the <span> element that closes the modal
var span2 = document.getElementById("close2");

// When the user clicks the button, open the modal
btn2.onclick = function() {
    modal2.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span2.onclick = function() {
    modal2.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
}
</script>
</body>
</html>
