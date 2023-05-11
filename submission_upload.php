<?php

if(isset($_POST['submit'])) {
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'pdf');

    if(in_array($fileActualExt, $allowed)) {
        if($fileError === 0) {
            if($fileSize < 1000000) {
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = "C:xampp\htdocs\u10fyp\submissions\\".$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);

                session_start();
                $_SESSION['uploaded']=true;
                header("Location: submit.php");
            } else {
                echo "ERROR: file too big";
            }
        } else {
            echo "ERROR: uploading file";
        }
    } else {
        echo "ERROR: invalid file type";
    }
}
?>