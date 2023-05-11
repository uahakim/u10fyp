<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>fyp2-2</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alata&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Almarai&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo+Black&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Asap&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karla&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu-1.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="background: #e5e5e5;">


<?php
    session_start();

    if($_SESSION["updated"] == true) {
        echo '<script>alert("Student profile updated")</script>';
        $_SESSION["updated"] = false;
    }

    $id = $_SESSION["student_id"];
    // echo "<script>alert('$id');</script>";

    $conn = mysqli_connect("localhost", "root", "", "u10fyp") or die("Cannot connect to server");
    $sql = "SELECT * FROM student_table WHERE student_id ='$id'";
	$result = mysqli_query($conn, $sql) or die("Cannot execute SQL");
	$row = mysqli_fetch_array($result);
	if($id == $row["student_id"]) {
?>

    <section style="margin: 15px;margin-top: 25px;margin-left: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div style="background: url(&quot;assets/img/uniten-logo.png&quot;) left / contain no-repeat;height: 100px;"></div>
                </div>
                <div class="col-md-4">
                    <section>
                        <div><img src="assets/img/website-logo.png" style="border-radius: 15px;border-width: 3.4px;border-style: solid;margin-left: 106px;"></div>
                    </section>
                </div>
                <div class="col-md-4">
                    <div style="background: #fe4a49;border-radius: 25px;padding: 10px;margin-top: 30px;width: 150px;margin-left: 160px;"><a class="text-center d-xl-flex justify-content-between align-items-center justify-content-xl-center align-items-xl-center" href="student.php" style="color: #ffffff;"><i class="fa fa-home" style="font-size: 30px;"></i></a></div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div style="background: #c4c4c4;width: 1240px;height: 500px;margin-left: 20px;margin-top: 45px;border-radius: 20px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12" style="margin-bottom: 50px;margin-top: 25px;margin-left: -20px;">
                            <div style="background: #fe4a49;border-radius: 25px;padding: 10px;margin-top: 30px;width: 150px;margin-left: 65px;"><a class="text-center d-xl-flex justify-content-between align-items-center justify-content-xl-center align-items-xl-center" href="lecturer.html" style="color: #ffffff;">Lecturer</a></div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div style="background: #ffffff;width: 260px;height: 250px;border-radius: 20px;margin-left: 60px;">
                                <div class="row">
                                    <div class="col">
                                        <div style="background: url(&quot;assets/img/user.png&quot;) center / contain no-repeat;height: 150px;margin-top: 30px;"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div style="margin-left: 60px;margin-top: 10px;">
                                            <p>Student Profile Page</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- form begin -->
                        <div class="col-md-4 col-xl-8">
                        <form action="student_update_profile.php" method="POST">
                        
                            <div style="background: #fed766;width: 800px;height: 300px;margin-top: -35px;margin-left: -40px;border-radius: 20px;">
                                <div class="row">
                                    <div class="col">
                                        <div style="margin: 30px;margin-bottom: 0px;">

                                            <!-- display id -->
                                            <p>Student ID: <?php echo $row["student_id"]?></p>
                                        </div>
                                        <div style="margin: 30px;margin-bottom: -10px;">
                                            <div class="row">
                                                <div class="col">

                                                    <!-- fullname -->
                                                    <div style="background: #ebebeb;border-radius: 25px;padding: 10px;"><i class="fa fa-user" style="margin-left: 15px;color: rgb(150,150,150);"></i><input type="text" style="background: rgba(255,255,255,0);border-style: none;margin-left: 10px;color: rgb(150,150,150);" name="fullname"></div>
                                                    <script>
                                                        document.getElementsByName('fullname')[0].value = <?php echo json_encode($row["student_name"]); ?>;
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="margin: 30px;margin-bottom: -10px;">
                                            <div class="row">
                                                <div class="col">

                                                    <!-- email -->
                                                    <div style="background: #ebebeb;border-radius: 25px;padding: 10px;"><i class="fa fa-envelope" style="margin-left: 15px;color: rgb(150,150,150);"></i><input type="text" style="background: rgba(255,255,255,0);border-style: none;margin-left: 10px;color: rgb(150,150,150);" name="email"></div>
                                                    <script>
                                                        document.getElementsByName('email')[0].value = <?php echo json_encode($row["student_email"]); ?>;
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="margin: 30px;margin-bottom: -10px;">
                                            <div class="row">
                                                <div class="col">

                                                    <!-- phone -->
                                                    <div style="background: #ebebeb;border-radius: 25px;padding: 10px;"><i class="fa fa-phone" style="margin-left: 15px;color: rgb(150,150,150);"></i><input type="text" style="background: rgba(255,255,255,0);border-style: none;margin-left: 10px;color: rgb(150,150,150);" name="phone"></div>
                                                    <script>document.getElementsByName('phone')[0].value = <?php echo json_encode($row["student_phone"]); ?>;</script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col" style="margin-left: -40px;">
                                        <div style="margin: 30px;margin-bottom: -20px;margin-left: 30px;margin-right: 30px;">
                                            <div class="row">
                                                <div class="col">

                                                    <!-- p.title -->
                                                    <div style="background: #ebebeb;border-radius: 25px;padding: 10px;"><i class="fa fa-pencil" style="margin-left: 15px;color: rgb(150,150,150);"></i><input type="text" style="background: rgba(255,255,255,0);border-style: none;margin-left: 10px;color: rgb(150,150,150);" name=ptitle></div>
                                                    <script>
                                                        document.getElementsByName('ptitle')[0].value = <?php echo json_encode($row["p_title"]); ?>;
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="margin: 30px;margin-bottom: 0px;">
                                            <div class="row">
                                                <div class="col">

                                                    <!-- p.desc -->
                                                    <div style="background: #ebebeb;border-radius: 25px;padding: 10px;height: 136.6px;"><i class="fa fa-edit" style="margin-left: 15px;color: rgb(150,150,150);"></i><textarea style="margin-left: 10px;color: rgb(150,150,150);background: rgba(255,255,255,0);border-style: none;" name="pdesc">Project Description</textarea></div>
                                                    <script>
                                                        document.getElementsByName('pdesc')[0].value = <?php echo json_encode($row["p_desc"]); ?>;
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="margin-left: 30px;margin-right: 30px;">
                                            <div class="row">
                                                <div class="col">
                                                    <div>
                                                        <div class="row">
                                                            <div class="col">

                                                                <!-- reset button -->
                                                                <button onclick=resetValues() style="background: #fe4a49;border-radius: 25px;padding: 10px;margin-top: 15px; color: rgb(255,255,255);text-align: center;">Reset</button>
                                                                <script>
                                                                    function resetValues() {
                                                                        document.getElementsByName('fullname')[0].value = "Not Set";
                                                                        document.getElementsByName('email')[0].value = "Not Set";
                                                                        document.getElementsByName('phone')[0].value = "Not Set";
                                                                        document.getElementsByName('ptitle')[0].value = "Not Set";
                                                                        document.getElementsByName('pdesc')[0].value = "Not Set";
                                                                    }
                                                                </script>
                                                            </div>
                                                            <div class="col">

                                                                <!-- update button -->
                                                                <input type="submit" value="Save Changes" style="background: #fe4a49;border-radius: 25px;padding: 10px;margin-left: -100px;margin-top: 15px;color: rgb(255,255,255);text-align: center;"></input>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- form ends -->
                        </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
    }
?>
    <div style="width: 350px;transform: translate(610px);margin-top: 30px;">
        <p class="text-center" style="width: 350px;">©2022 Hakim Chulan U10Fyp. All rights reserved</p>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Sidebar-Menu.js"></script>
</body>

</html>