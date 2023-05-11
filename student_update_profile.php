<?php
			$conn = mysqli_connect("localhost","root", "","u10fyp") 
			or die("Cannot connect to database");

			session_start();
            $id = $_SESSION["student_id"];

            $name = $_POST["fullname"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $ptitle = $_POST["ptitle"];
            $pdesc = $_POST["pdesc"];

			$sql="Select * from student_table where student_id ='$id'";  

			$result=mysqli_query($conn,$sql);    

			if(mysqli_num_rows($result) == 0) {  
				echo "ERROR";
		
			}
			else  {   
				$row = mysqli_fetch_array($result);   

				$sql_update = "
                UPDATE student_table SET
					student_name = '$name', 
					student_email = '$email',
                    student_phone = '$phone',
                    p_title = '$ptitle',
                    p_desc = '$pdesc'
                WHERE student_id = '$id'";
		
				$status = mysqli_query($conn, $sql_update) or die("Error in updating data");

                $_SESSION["updated"] = true;
                header("Location:profile.php"); 
			} 
?>