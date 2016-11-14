<html>

<body>

<?php


$planid=$_POST["planid"];
$url=$_POST["url"];
$height=$_POST["height"];
$width=$_POST["width"];

$servername = "localhost";
$username = "root";
$password = "78T36d9peFpG7MZy";
$dbname = "vamedited";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO standard_plan
VALUES('$planid','$url','$height','$width')";

if ($conn->query($sql) === TRUE) {
		echo "Image saved!";
	}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<a href="uploadplanoriginal.html"><button>Upload another</button></a>
<a href="imagegallery.php"><button>View Plans</button></a>


</body>

</html>