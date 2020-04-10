<?php
$type = filter_input(INPUT_POST, 'opt');
$name = filter_input(INPUT_POST, 'name');
$id = filter_input(INPUT_POST, 'id');
$mobile = filter_input(INPUT_POST, 'phone');
$email = filter_input(INPUT_POST, 'email');
$address = filter_input(INPUT_POST, 'address');
$message = filter_input(INPUT_POST, 'message');

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
$sql= "INSERT INTO selfemp (Type, Name, ID, Mobile, Email, Address, About, Slot) values ('$type','$name','$id','$mobile','$email','$address','$message',0)";
$conn->query($sql);
    $url="https://www.sms4india.com/api/v1/sendCampaign";
$message = urlencode("Hi ".$name."! Police verification team will reach your address within 48 hrs.");// urlencode your message
$curl = curl_init();
curl_setopt($curl, CURLOPT_POST, 1);// set post data to true
curl_setopt($curl, CURLOPT_POSTFIELDS, "apikey=ZPHY2O1KZDSY65NGR5ZOZDNYEXIY2QKH&secret=EYCT2YVD4C9I8KO1&usetype=stage&phone=".$mobile."&senderid=COVLOC&message=$message");// post data
// query parameter values must be given without squarebrackets.
 // Optional Authentication:
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_exec($curl);
curl_close($curl);
}


$conn->close();

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
</head>

<body id="page-top">
    
    <header class="masthead">
        <div class="container">
            <div class="intro-text"><center><font color="black">
            Registration Successful! Check your inbox for confirmation.</font></center><a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" role="button" href="index.html">HOME</a></div>
        </div>
    </header>
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/agency.js"></script>
</body>

</html>