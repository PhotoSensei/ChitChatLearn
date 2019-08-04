
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
$email = $_REQUEST['email'];     
$name = $_REQUEST['name']; 
$country = $_REQUEST['country'];
$town = $_REQUEST['town']; 
$state = $_REQUEST['state']; 
$gender = $_REQUEST['gender']; 
$dob = $_REQUEST['dob']; 
$mob = $_REQUEST['mob']; 
$yob = $_REQUEST['yob']; 
$nlang = $_REQUEST['nlang']; 
$plang = $_REQUEST['plang']; 
$usc = $_REQUEST['usc']; 
$avatarloc = $_REQUEST['avatarloc']; 
$int = $_REQUEST['int']; 
$des = $_REQUEST['des']; 




$query = "INSERT INTO `registration`(`uname`, `pwd`,`name`,`email`, `country`, `town`,`state`,`gender`,`dob`,`mob`,`yob`,`nlang`,`plang`,`usc`,`avatarloc`,`int`,`des`) VALUES (\"$uname\",\"$pwd\"\"$email\",,\"$name\",\"$country\",\"$town\",\"$state\",\"$gender\",\"$dob\",\"$mob\",\"$yob\",\"$nlang\",\"$plang\",\"$usc\",\"$avatarloc\",\"$int\",\"$des\")";
$data = mysqli_query($conn,$query);
       if($data) {
           mysqli_close($conn);
          echo "registered";
          header('location: index.html');
       }
       else{
            echo "failed";
        }


?>



