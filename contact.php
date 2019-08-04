
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
    
$name = $_REQUEST['name']; 
$email = $_REQUEST['email'];
$subject = $_REQUEST['subject']; 
$msg = $_REQUEST['msg']; 




$query = "INSERT INTO `contact`(`name`, `email`, `subject`,`msg`) VALUES (\"$name\",\"$email\",\"$subject\",\"$msg\")";
$data = mysqli_query($conn,$query);
       if($data) {
           mysqli_close($conn);
          echo "submitted";
       }
       else{
            echo "failed";
        }


?>
</body>
</html>



