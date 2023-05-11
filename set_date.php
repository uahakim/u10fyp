<?php
			$conn = mysqli_connect("localhost","root", "","u10fyp") 
			or die("Cannot connect to database");

			session_start();
            $milestone_no = $_SESSION["no"];

            $date = $_POST["date"];

			$sql="SELECT * FROM milestones_table WHERE milestone_no ='$milestone_no'";  

			$result=mysqli_query($conn,$sql);    

			if(mysqli_num_rows($result) == 0) {  
				echo "ERROR";
		
			}
			else  {   
				$row = mysqli_fetch_array($result);

				$sql_update = "
                UPDATE milestones_table SET
					milestone_date = '$date'
               	WHERE milestone_no ='$milestone_no'";
		
				$status = mysqli_query($conn, $sql_update) or die("Error in updating data");

                $_SESSION["updated"] = true;
                header("Location:admin.php"); 

				// echo "RESULT:<br>";
				// echo "INPUT MILESTONE NO: $milestone_no <br>";
				// echo "INPUT MILESTONE DATE: $date <br>";
				// echo "FETCHED MILESTONE NO: ";
				// echo $row["milestone_no"]."<br>";
				// echo "FETCHED MILESTONE DATE: ";
				// echo $row["milestone_date"]."<br>";
			} 
?>