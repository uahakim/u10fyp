
<?php 

// Get the user id  
$student_id = $_REQUEST["search_id"]; 


// Database connection 
$con = mysqli_connect("localhost", "root", "", "u10fyp");


if ($student_id !== "") {       

    // Get corresponding student id for that student name    
    $query = mysqli_query($con, "SELECT student_name FROM student_table WHERE student_id='$student_id'");  


    $row = mysqli_fetch_array($query); 

    // Get the student_name 
    $student_name = $row["student_name"];
} 


// Store it in a array 
$result = array("$student_name",""); 


// Send in JSON encoded form 
$myJSON = json_encode($result); 

echo $myJSON; 

?> 
