
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = mysqli_connect($servername, $username, "", $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
       
} 

//function NewUser() {
    
$uname = $_REQUEST['uname']; 
$pwd = $_REQUEST['pwd'];
session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $uname = $_REQUEST['uname']; 
	  $pwd = $_REQUEST['pwd'];
      
      
	  $sql = "SELECT id FROM registration WHERE uname = '$uname' and passcode = '$pwd'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("uname");
         $_SESSION['login_user'] = $uname;
         
         header("location: loginpage1.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>




