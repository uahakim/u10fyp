
<?php 

// Get the user id  
$student_name = $_REQUEST["search_name"]; 


// Database connection 
$con = mysqli_connect("localhost", "root", "", "u10fyp");


if ($student_name !== "") {       

    // Get corresponding student id for that student name    
    $query = mysqli_query($con, "SELECT student_id FROM student_table WHERE student_name='$student_name'");  


    $row = mysqli_fetch_array($query); 

    // Get the student_id 
    $student_id = $row["student_id"];
} 


// Store it in a array 
$result = array("$student_id",""); 


// Send in JSON encoded form 
$myJSON = json_encode($result); 

echo $myJSON; 

?> 
