<?php
			$conn = mysqli_connect("localhost","root", "","u10fyp") 
			or die("Cannot connect to database");

			$id = $_POST["id"];
			$pass = $_POST["password"];

			$sql="Select * from user_table where id ='$id'"; 
            
            $admin="me";

			$result=mysqli_query($conn,$sql);    

			if(mysqli_num_rows($result) == 0) {  
				echo "Username does not exist";
		
			}
			else  {   
				$row = mysqli_fetch_array($result);   

				if($row["id"] == $admin) {    
					if($row["pass"] == $pass) {
                        session_start();
					    $_SESSION["admin_name"] = $id;  
					    $_SESSION["updated"] = false;
					    header("Location:admin.php");   
                    }
				}
				else {
					if($row["pass"] == $pass) {
                        session_start();
					    $_SESSION["student_id"] = $id;  
					    $_SESSION["updated"] = false;
					    header("Location:student.php");   
                    }
				}

			} 
?>