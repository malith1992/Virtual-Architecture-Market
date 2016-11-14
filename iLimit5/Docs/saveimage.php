<html>

<body>

<?php


$planid=$_POST["planid"];
$version = "1";
$imgid=$_POST["imgid"];
$url=$_POST["url"];
$height=$_POST["height"];
$width=$_POST["width"];
$top=$_POST["top"];
$left=$_POST["left"];

$servername = "localhost";
$username = "root";
$password = "78T36d9peFpG7MZy";
$dbname = "vamedited";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO modified_plan VALUES('$planid','$version','$imgid','$url','$height','$width','$top','$left');";

if (mysqli_multi_query($conn,$sql)) {
		header('Location: uploadplanblock.html');
	}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


</body>

</html>