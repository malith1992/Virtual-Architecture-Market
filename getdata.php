<?php
$servername = "localhost";
$username = "root";
$password = "78T36d9peFpG7MZy";
$dbname = "vamedited";

// Create connection
$conn =new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 
$array=array();
$index=0;
$field=$_GET["category"];

$result = $conn->query("SELECT user.Firstname as fname, user.Lastname as lname
FROM user
INNER JOIN architect ON user.UserID = architect.UserID
INNER JOIN skill ON skill.A_ID = architect.A_ID
WHERE skill.Skill ='".$field."'");  



if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
         $array[$index]=$row["fname"]." ".$row["lname"];
        $index++;
     }
}

echo json_encode($array);
?> 
