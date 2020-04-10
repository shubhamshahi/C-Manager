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
$type = filter_input(INPUT_POST, 'type');
$id = filter_input(INPUT_POST, 'id');
$slot = filter_input(INPUT_POST, 'sno');



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
    if($type=="business")
    {
      $sql= "UPDATE business SET Slot='$slot' WHERE ID='$id'";
    }
    if($type=="selfemp")
    {
      $sql= "UPDATE selfemp SET Slot='$slot' WHERE ID='$id'";
    }
$conn->query($sql);
}


$conn->close();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>C-Manager</title>
    <link rel="shortcut icon" href="assets/img/fav5.ico">
    <meta name="description" content="Got rid of high cab prices! Now choose your own cab!">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
</head>


<body>
<h1>Successful!</h1>
</body>

</html>