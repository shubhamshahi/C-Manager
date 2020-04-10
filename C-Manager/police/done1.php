<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<?php

$id = filter_input(INPUT_POST, 'id');



$servername = "localhost";
$username = "root";
$password = "";
$dbname="C-Manager";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else {
    
      $sql= "SELECT * FROM move WHERE Aadhaar='$id'";
$result=$conn->query($sql);
    if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
     echo "Name: " .$row['Name']." Destination: ".$row['Destination']." Time: ".$row['Time']."<br>" ;
}

 }
}
    
    $sql1= "SELECT * FROM invite WHERE Aadhaar='$id'";
$result1= $conn->query($sql1);
    if ($result1->num_rows > 0) {
    
    while($row = $result1->fetch_assoc()) {
echo "Name: " .$row['Person']." Destination: ".$row['Destination']." Time: ".$row['Time']."<br>" ;
 }
}
    



$conn->close();
?>
<!DOCTYPE html>
<html>
<style>
html {
  background-image: url('C:/xampp/htdocs/C-Manager/bg1.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>

</html>

