<?php
			$conn = mysqli_connect("localhost","root", "","u10fyp") 
			or die("Cannot connect to database");

			$name = $_POST["name"];
			$pass = $_POST["password"];

			$sql="Select * from admin_table where admin_name ='$name'";  

			$result=mysqli_query($conn,$sql);    

			if(mysqli_num_rows($result) == 0) {  
				echo "Username does not exist";
		
			}
			else  {   
				$row = mysqli_fetch_array($result);   

				if($row["admin_pass"] == $pass) {    
					session_start();
					$_SESSION["admin_name"] = $name;  
					$_SESSION["updated"] = false;
					header("Location:admin.php");   
				}
				else {
					echo "ERROR: Wrong password";
				}

			} 
?>