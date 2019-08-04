<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['uname']) || empty($_POST['pwd'])) {
$error = "uname or pwd is invalid";
echo"empty";
}

else
{
// Define $uname and $pwd
$uname=$_POST['uname'];
$pwd=$_POST['pwd'];
// Establishing Connection with Server by passing server_name, user_id and pwd as a parameter
$connection = mysql_connect("localhost", "root", "");
// To protect MySQL injection for Security purpose
$uname = stripslashes($uname);
$pwd = stripslashes($pwd);
$uname = mysql_real_escape_string($uname);
$pwd = mysql_real_escape_string($pwd);
// Selecting Database
$db = mysql_select_db("test", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select * from registration where pwd='$pwd' AND uname='$uname'", $connection);
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$uname; // Initializing Session
header("location: loginpage1.php"); // Redirecting To Other Page
} else {
$error = "uname or pwd is invalid";
}
mysql_close($connection); // Closing Connection
}
}
?>