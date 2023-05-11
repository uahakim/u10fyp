<?php
			$conn = mysqli_connect("localhost","root", "","u10fyp") 
			or die("Cannot connect to database");

			$id = $_POST["id"];
			$pass = $_POST["password"];

            echo "POST id = $id";
            echo "POST pass = $pass";

			$sql="Select * from student_table where student_id ='$id'";  

			$result=mysqli_query($conn,$sql);    

			if(mysqli_num_rows($result) == 0) {  
				echo "Username does not exist";
		
			}
			else  {   
				$row = mysqli_fetch_array($result);   

				if($row["student_pass"] == $pass) {    
					session_start();
					$_SESSION["student_id"] = $id;  
					 
					header("Location:student.php");   
				}
				else {
					echo "ERROR: Wrong password";
				}

			} 
?>