<html>
<head>
<title>Image Gallery</title>
<style>
.buttons {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 10px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
.buttons:hover {
    opacity : 0.5;

</style>
<script class="jsbin" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.6.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {    // add listener for document ready
    $('#sp').change(function() {     //add a listener for change
      var selectedValue = $(this).find(":selected").val();
      $('#planid').val(selectedValue);
    });

  });
  

</script>

</head>

<body style="background-image:url('background1.jpg');">

<div>
<?php 

$servername = "localhost";
$username = "root";
$password = "78T36d9peFpG7MZy";
$dbname = "vamedited";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT DISTINCT planID, version FROM modified_plan";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		echo '<option value="'.$row["planID"].'">'.$row["planID"].'</option>';
	}
}
else {
	echo "";
}

$conn->close();


?>
</div>
<div style="position:absolute; top:150px; left:350px;">
<?php 

$servername = "localhost";
$username = "root";
$password = "78T36d9peFpG7MZy";
$dbname = "vamedited";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM standard_plan";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
	
	echo '<tr><td>';
	echo '<br/> <br/><img id="'.$row["planID"].'" style="position:absolute;" src="'.$row["url"].'" width="'.$row["width"].'" height="'.$row["height"].'" />';
	echo '</td></tr>';
	}
}
else{

}
$conn->close();
?>
</div>
<div style="position:absolute; top:150px; left:20px;">
<form action="planc.php" method="post">

Select Image: <select name="sp" id="sp" class="buttons">
<?php 

$servername = "localhost";
$username = "root";
$password = "78T36d9peFpG7MZy";
$dbname = "vamedited";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT DISTINCT planID, version FROM modified_plan";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		echo '<option value="'.$row["planID"].'">'.$row["planID"].'</option>';
	}
}
else {
	echo "";
}

$conn->close();


?>

</select>

<div>
<input type="hidden" name="planid" value="1" id="planid"/>
<input type="hidden" name="version" value="1"/>
<br/>
<input type="submit" value="Edit" class="buttons"/>

</form>

<a href="uploadplanblock.html"><button class="buttons">Upload Blocks</button></a>



</body>
</html>