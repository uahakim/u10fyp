<?php
			$conn = mysqli_connect("localhost","root", "","u10fyp") 
			or die("Cannot connect to database");

			session_start();

            $s_id = $_POST["search_id"];
            $sv_name = $_POST["search_sv_name"];
            // $sv_email = $_POST["sv_email"];
            $ex_name = $_POST["search_ex_name"];
            // $ex_email = $_POST["ex_email"];

			// get student details
			$sql="SELECT * FROM student_table WHERE student_id ='$s_id'";  
			$result=mysqli_query($conn,$sql); 

			// get sv email
			$sql_sv="SELECT lecturer_email FROM lecturer_table WHERE lecturer_name='$sv_name'";
			$query_sv=mysqli_query($conn,$sql_sv);

			// get ex email
			$sql_ex="SELECT lecturer_email FROM lecturer_table WHERE lecturer_name='$ex_name'";
			$query_ex=mysqli_query($conn,$sql_ex);

			if(mysqli_num_rows($query_sv) == 0 || mysqli_num_rows($query_ex) == 0) {
				echo "ERROR: Lecturer not found";
				
			} 
			else {

				$sv_details = mysqli_fetch_array($query_sv);
				$ex_details = mysqli_fetch_array($query_ex);

				$sv_email=$sv_details["lecturer_email"];
				$ex_email=$ex_details["lecturer_email"];

					if(mysqli_num_rows($result) == 0) {  
						echo "ERROR: Student ID not found";
				
					}
					else  {   
						$row = mysqli_fetch_array($result);   

						$sql_update = "
						UPDATE student_table SET
							sv_name = '$sv_name', 
							sv_email = '$sv_email',
							ex_name = '$ex_name',
							ex_email = '$ex_email'

						WHERE student_id = '$s_id'";
				
						$status = mysqli_query($conn, $sql_update) or die("Error in updating data");

						header("Location:admin.php");
					} 
				}
?>