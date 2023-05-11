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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
</head>

<body>
<?php
    session_start();
    $_SESSION["no"]="4";
    // $admin_name = $_SESSION["admin_name"];

    if($_SESSION["updated"] == true) {
        echo '<script>alert("Milestone date updated")</script>';
        $_SESSION["updated"] = false;
    }


    $conn = mysqli_connect("localhost", "root", "", "u10fyp") or die("Cannot connect to server");

    $sql = "SELECT * FROM milestones_table WHERE milestone_no = '4'";
	$result = mysqli_query($conn, $sql) or die("Cannot execute SQL");
	$row = mysqli_fetch_array($result);

?>
    <div id="wrapper">
        <div id="sidebar-wrapper" style="background: #c4c4c4;">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <div style="margin: 50px;">
                        <div class="row" style="background: #ffffff;border-radius: 30px;width: 144px;">
                            <div class="col" style="font-size: 45px;text-align: left;"><a href="login.html" style="color: #212529;font-size: 30px;"><i class="fa fa-sign-out" style="margin-left: 12px;margin-bottom: 0px;"></i></a></div>
                        </div>
                    </div>
                </li>
                <li style="margin-top: 15px;"> <a id="link1" href="admin.php" style="margin-right: 5px;margin-left: 5px;"><i class="fa fa-list" id="icon1" style="margin-left: -20px;color: #074674;"></i><span id="span1" style="margin-left: 20px;color: #074674;border-color: #000000;font-size: 18px;">Dashboard</span></a></li>
                <!-- <li> <a id="link2" href="milestones.html" style="margin-right: 5px;margin-left: 5px;"><i class="fa fa-calendar" id="icon2" style="margin-left: -20px;color: #074674;"></i><span id="span2" style="margin-left: 20px;color: #074674;font-size: 18px;">Milestones</span></a></li> -->
                <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" style="margin-right: 5px;margin-left: 5px;">
                            <i class="fa fa-calendar" id="icon2" style="margin-left: -20px;color: #074674;"></i><span id="span2" style="margin-left: 20px;color: #074674;font-size: 18px;">Milestones</span>
                        </a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li><a href="set_m1.php"><span style="margin-left: 5px;color: #074674;font-size: 15px;">Milestone 1</span></a></li>
                            <li><a href="set_m2.php"><span style="margin-left: 5px;color: #074674;font-size: 15px;">Milestone 2</span></a></li>
                            <li><a href="set_m3.php"><span style="margin-left: 5px;color: #074674;font-size: 15px;">Milestone 3</span></a></li>
                            <li><a href="set_m4.php"><span style="margin-left: 5px;color: #074674;font-size: 15px;">Milestone 4</span></a></li>
                        </ul>
                    </li>
                <li> <a id="link3" href="lecturer-student.php" style="margin-right: 5px;margin-left: 5px;"><i class="fa fa-user-plus" id="icon3" style="margin-left: -20px;color: #074674;"></i><span id="span3" style="margin-left: 20px;color: #074674;font-size: 18px;">Lecturer-Student</span></a></li>
            </ul>
        </div>
        <div id="page-content-wrapper" style="background: #e5e5e5;height: 800px;">
            <div class="container-fluid">
                <div style="margin-bottom: 35px;">
                    <div class="row">
                        <div class="col-md-6">
                            <div style="margin-top: 5px;"><img src="assets/img/website-logo.png" style="border-radius: 15px;border-width: 3.4px;border-style: solid;height: 90px;"></div>
                        </div>
                        <div class="col-md-6">
                            <div style="margin-left: 350px;"><img src="assets/img/uniten-logo.png" style="height: 91px;"></div>
                        </div>
                    </div>
                </div>
                <div style="background: #c4c4c4;border-radius: 15px;padding: 20px;">
                    <div style="background: rgb(254,215,102);padding: 20px;border-radius: 15px;text-align: center;">
                        <div class="row">
                            <div class="col">
                                <div style="border-radius: 25PX;">
                                    <div style="background: #fe4a49;border-radius: 15px;">
                                        <div style="background: url(&quot;assets/img/trophy.png&quot;) center / contain no-repeat, #ffffff;height: 111px;border-style: solid;border-radius: 120PX;width: 110px;margin: 20px;padding: 1px;margin-left: 505px;"></div>
                                        <div style="background: url(&quot;assets/img/banner.png&quot;) center / contain no-repeat;height: 202.5px;margin-top: -75px;margin-bottom: -66px;"></div>
                                        <div style="margin: 20px;padding: 1px;margin-bottom: 17px;margin-top: -126px;">
                                            <p style="color: #ffffff;font-family: Alata, sans-serif;">MILESTONE 4</p>
                                            <p style="font-family: Alata, sans-serif;color: #ffffff;margin-top: 45px;"><?php echo $row["milestone_date"];?></p>
                                        </div>

                                        <!-- form begin: m3 -->

                                        <form action="set_date.php" method="POST">
                                            <div style="margin: 20px;padding: 1px; width: 500px; margin-left: 300px;">
                                                <div style="background: #074674;border-radius: 25px;padding: 1px;margin: 20px;margin-top: 0px;">
                                                    <p style="margin-bottom: 0px;color: rgb(255,255,255);text-align: center;height: 30px;margin-top: 5px;">Set date</p>
                                                    <div class="input-group date" id="datepicker">
                                                        <input type="text" class="form-control" name="date">
                                                        <span class="input-group-append">
                                                            <span class="input-group-text bg-white">
                                                                <i class="fa fa-calendar"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <input style="background: #074674;border-radius: 25px;padding: 10px; color: #ffffff; margin-left: 480px" class="text-center d-xl-flex justify-content-between align-items-center justify-content-xl-center align-items-xl-center button" type="submit" value="Confirm"></input>

                                                </div>
                                            </div>
                                        </form>
                                    
                                        <!-- form end -->
                                    </div>
                                </div>
                            </div>
                                                 </div>
                        </div>
                    </div>
                </div>
                <div style="transform: translate(610px);margin-top: 70px;margin-right: 0px;margin-left: -180px;">
                    <p class="text-center" style="width: 350px;">©2022 Hakim Chulan U10Fyp. All rights reserved</p>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Sidebar-Menu.js"></script>
    <script type="text/javascript">
        $(function() {
            $('#datepicker').datepicker({ format: 'yyyy-mm-dd' });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>