<?php
    $conn = mysqli_connect("localhost","root", "","u10fyp") 
    or die("Cannot connect to database");

    if (isset($_POST['query'])) {
      $inpText = $_POST['query'];
      $sql = "SELECT * FROM student_table WHERE student_name LIKE '%$inpText%'";
      // $stmt = $conn->prepare($sql);
      // $stmt->execute(['s_name' => '%' . $inpText . '%']);
      // $result = $stmt->fetchAll();

      $result = mysqli_query($conn, $sql);
  
      if ($result) {
        foreach ($result as $row) {
          echo '<a href="#" class="list-group-item list-group-item-action border-1">' . $row['student_name'] . '</a>';
        }
      } else {
        echo '<p class="list-group-item border-1">No Record</p>';
      }
    }
?>