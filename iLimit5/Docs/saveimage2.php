<html>

<body>

<?php

$image=$_POST["img1"];
$id=$_POST["id"];
$height=$_POST["height"];
$width=$_POST["width"];
$top=$_POST["top"];
$bottom=$_POST["bottom"];
$left=$_POST["left"];
$right=$_POST["right"];

$servername = "localhost";
$username = "root";
$password = "78T36d9peFpG7MZy";
$dbname = "vamedited";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO modified_plan
VALUES('$image','$id','$height','$width','$top','$bottom','$left','$right')";

if ($conn->query($sql) === TRUE) {
    header('Location: planc.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


</body>

</html>