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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
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
                    <div style="background: #fed766;padding: 20px;border-radius: 15px;">
                        <div style="background: #fe4a49;color: #ffffff;padding: 20px;border-radius: 15px;">
                            <div>
                                <div class="row">
                                    <div class="col-xxl-8">
                                        <div style="margin: 20px;">
                                            <h1>We are currently in Milestone:&nbsp;</h1>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div style="margin: 20px;">
                                            <h1>3</h1>
                                        </div>
                                    </div>
                                </div>
                                <div style="margin: -10px;margin-top: 5px;margin-bottom: 10px;">
                                    <div class="row" style="margin-left: 20px;">
                                        <div class="col">
                                            <div style="margin-right: 25px;">
                                                <div class="row">
                                                    <div class="col">
                                                        <h1 style="font-size: 30px;">Date</h1>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div style="color: #ffffff;border-radius: 100px;background: #c4c4c4;border: 2px solid #ffffff ;">
                                                            <h1 class="d-xxl-flex justify-content-xxl-center align-items-xxl-center" style="font-size: 35px;height: 100px;">27th May 2022</h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div style="margin-right: 25px;">
                                                <div class="row">
                                                    <div class="col">
                                                        <h1 style="font-size: 30px;">Time</h1>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div style="color: #ffffff;border-radius: 100px;background: #c4c4c4;border-width: 2px;border-style: solid;">
                                                            <h1 class="d-xxl-flex justify-content-xxl-center align-items-xxl-center" style="font-size: 35px;height: 100px;">9.30pm</h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div style="margin-right: 25px;">
                                                <div class="row">
                                                    <div class="col">
                                                        <h1 style="font-size: 30px;">Milestone Ends In</h1>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div style="color: #ffffff;border-radius: 100px;background: #c4c4c4;border-width: 2px;border-style: solid;">
                                                            <h1 class="d-xxl-flex justify-content-xxl-center align-items-xxl-center" style="font-size: 35px;height: 100px;">4 days</h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>