<?php
$servername = "localhost";
$username = "root";
$pwdssword = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $pwdssword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$ux = $_REQUEST['uname']; 
$px = $_REQUEST['pwd'];

$query="SELECT * from registration where uname='$ux' and pwd='$px'";
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result)==1){
    session_start();
    $_SESSION['auth']='true';
    header('location: loginpage3.php');
}
else{
    $message = "INVALID USER";
    header('location: index.html');
    echo "<script type='text/javascript'>alert('$message');</script>";
	exit();
}
?>