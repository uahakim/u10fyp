<?php
    $conn = mysqli_connect('localhost', 'root', '', 'u10fyp') 
    or die("Could not connect");

    if(isset($_POST['submit'])) {
        $fileName = $_POST['name'];
        $name = $_FILES['file']['name'];
        $targetDir = "submissions/";
        $targetFile = $targetDir.basename($_FILES['file']['name']);
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        $extensions_arr = array('jpg', 'jpeg', 'png');

        if(in_array($fileType, $extension_arr)) {
            //insert record
            $query = "INSERT into `files` (`filename`) values('$name')";
            mysqi_query($conn, $query);
            //upload file
            move_uploaded_file($_FILES['file']['tmp_name'], $targetDir.$name);
        } else echo "Wrong file type";

    }

    $sql = "SELECT `filename` FROM `files` WHERE `filename`='$name'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $image = $row['filename'];
    $image_src = "submissions/".$image;
?>

<img src="<?php echo $image_src;?>" alt="">