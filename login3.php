<?php  
if(isset($_POST["submit"]))
{  echo "1";
	if(!empty($_POST['uname']) && !empty($_POST['pwd'])) 
		{  
    		$uname = $_REQUEST['uname']; 
			$pwd = $_REQUEST['pwd']; 
  			$link = new mysqli("localhost", "root","","test");

			
    //check for database connection error
			if($link->connect_errno > 0)
			{
				die('Unable to connect to database [' . $link->connect_error. ']');
			}
			else
			{
				echo "connected"."";
			}
//step 2

//create query
			$query = "SELECT uname,pwd FROM registration WHERE uname = '$uname'";
//execute query
			$result = $link->query($query);
//check if the query is valid
			if(!$result = $link->query($query))
			{
				die('There was an error running the query [' . $link->error. ']');
			}
			else
			{
				echo "its ok"."";
			}

//step3

//fetch executed query data
			$row = $result->fetch_assoc();

//step4
//check if the uname is valid uname 
			if($row['uname']=="$uname" && $row['pwd']=="$pwd")
			{
 				echo "<script type='text/javascript'>alert('Login Successfull');</script>";
 				echo "<script type='text/javascript'>location.href = 'loginpage2.html';</script>";
			} 
			else
			{
				echo "<script type='text/javascript'>alert('Invalid Credentials');</script>";
			} 
		}
} 
?>