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
                    <div style="background: #fed766;padding: 15px;border-radius: 15px;">
                        <!-- form begins -->
                            <form method="POST" action="update_l-s.php">
                                <div class="row">
                                    <div class="col">
                                        <div style="background: #fe4a49;padding: 5px;border-radius: 15px;margin-top: 5px;">
                                            <div>
                                                <div class="row">
                                                    <div class="col">
                                                        <h1 style="color: #ffffff;padding: 40px;font-size: 32px;">Choose Student:</h1>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="padding: 15px;">
                                                <div class="row">
                                                    <div class="col">
<!-- input student id -->
                                                        <div style="background: #ebebeb;border-radius: 25px;padding: 10px;">
                                                        <input type="text" name="search_id" id="search_id" value="" 
                                                        style="background: rgba(255,255,255,0);border-style: none;margin-left: 10px;color: rgb(150,150,150);" 
                                                        onkeyup="getName(this.value)" placeholder="Student ID"></div>
<!-- display list of matched ids -->
                                                        <div>
                                                            <div class="list-group" id="show-list-id">
                                                            <!-- <a href="#" class="list-group-item list-group-item-action border-1">output</a> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="padding: 15px;">
                                                <div class="row">
                                                    <div class="col">
<!-- input student name -->
                                                        <div style="background: #ebebeb;border-radius: 25px;padding: 10px;">
                                                        <input type="text" name="search_name" id="search_name" value="" 
                                                        style="background: rgba(255,255,255,0);border-style: none;margin-left: 10px;color: rgb(150,150,150);" 
                                                        onkeyup="getID(this.value)" placeholder="Student Name"></div>
<!-- display list of matched names -->
                                                        <div>
                                                            <div class="list-group" id="show-list-name">
                                                            <!-- <a href="#" class="list-group-item list-group-item-action border-1">output</a> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div style="padding: 5px;background: #fe4a49;border-radius: 15px;margin-top: 5px;">
                                            <div>
                                                <div class="row">
                                                    <div class="col">
                                                        <h1 style="color: #ffffff;padding: 40px;font-size: 32px;">Assign Lecturer:</h1>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="padding: 15px;">
                                                <div class="row">
                                                    <div class="col">
<!-- input sv name -->
                                                        <div style="background: #ebebeb;border-radius: 25px;padding: 10px;"><input type="text" name="search_sv_name" id="search_sv_name" value="" style="background: rgba(255,255,255,0);border-style: none;margin-left: 10px;color: rgb(150,150,150);" placeholder="Supervisor Name"></div>
<!-- display list of matched names -->
                                                        <div>
                                                            <div class="list-group" id="show-list-sv-name">
                                                            <!-- <a href="#" class="list-group-item list-group-item-action border-1">output</a> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="padding: 15px;">
                                                <div class="row">
                                                    <div class="col">
<!-- input ex name -->
                                                        <div style="background: #ebebeb;border-radius: 25px;padding: 10px;"><input type="text" name="search_ex_name" id="search_ex_name" value="" style="background: rgba(255,255,255,0);border-style: none;margin-left: 10px;color: rgb(150,150,150);" placeholder="Examiner Name"></div>
<!-- display list of matched names -->
                                                        <div>
                                                            <div class="list-group" id="show-list-ex-name">
                                                            <!-- <a href="#" class="list-group-item list-group-item-action border-1">output</a> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div style="margin-top: 75px;margin-bottom: -82px;">
                                            <div class="row">
                                                <div class="col" style="background: url(&quot;assets/img/student-lecturer.png&quot;) center / contain no-repeat;height: 158px;margin-bottom: -148px;">
                                                    <div></div>
                                                </div>
                                                <div class="col" style="height: 158px;margin-bottom: -148px;">
                                                    <div style="background: url(&quot;assets/img/right-arrow.png&quot;) center / contain no-repeat;height: 80px;margin-top: 46px;"></div>
                                                </div>
                                                <div class="col" style="background: url(&quot;assets/img/teacher-student.png&quot;) center / contain no-repeat;height: 158px;margin-bottom: -148px;">
                                                    <div></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="margin-top: 303px;width: 200px;margin-right: 0px;">
                                            <div class="row">
                                                <div class="col">
                                                    <div style="background: #074674;border-radius: 25px;padding: 10px;margin-top: 15px;border-width: 5.4px;">
                                                        <input type="submit" name="submit" value="Assign" style="background: #074674; border:none; margin-bottom: 0px;color: rgb(255,255,255);margin-left:57px;"></input>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        <!-- form ends -->
                    </div>
                </div>
                <div style="transform: translate(610px);margin-top: 70px;margin-right: 0px;margin-left: -180px;">
                    <p class="text-center" style="width: 350px;">©2022 Hakim Chulan U10Fyp. All rights reserved</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="assets/js/script.js"></script>

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