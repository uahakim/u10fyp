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

    $id = $_SESSION["student_id"];
    $_SESSION["updated"] = false;
?>
    <section>
        <div class="container" style="margin-top: 30px;margin-left: 190px;">
            <div class="row">
                <div class="col-md-6 offset-xxl-0" style="background: url(&quot;assets/img/uniten-logo.png&quot;) no-repeat;background-size: contain;height: 65px;margin-top: 5px;"><span></span></div>
                <div class="col-md-6 col-xxl-2 offset-xxl-3" style="text-align: center;">
                    <div>
                        <div class="row" style="background: #ffffff;border-radius: 30px;width: 144px;">
                            <div class="col" style="font-size: 40px;text-align: right;"><a href="profile.php" style="color: #212529;"><i class="fa fa-user-circle-o" style="margin-top: 16.5px;"></i></a></div>
                            <div class="col" style="font-size: 45px;text-align: left;"><a href="login.html" style="color: #212529;"><i class="fa fa-sign-out"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div style="margin-left: 87vh;transform: translate(40px);"><img src="assets/img/website-logo.png" style="border-radius: 15px;border-width: 3.4px;border-style: solid;"></div>
    </section>
    <section style="margin-bottom: 10px;">
        <div class="container" style="background: #fed766;border-radius: 30px;margin-top: 30px;text-align: center;height: 400px;">
            <div class="row">
                <div class="col-md-6 col-xl-8">
                    <div class="row">
                        <div class="col">
                            <div style="background: #009fb7;border-radius: 20px;font-size: 10px;width: 500px;padding: 0px;margin-left: 230px;margin-top: 25px;margin-bottom: 40px;">
                                <h1 style="font-size: 32px;text-align: center;color: rgb(255,255,255);padding: 15px;margin-left: 0px;">Welcome, Ungku Azman Hakim Bin Ungku Chulan</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-left: 20px;">
                        <div class="col">
                            <div>
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
                            <div>
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
                            <div>
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
                <div class="col"><img src="assets/img/student.png"></div>
            </div>
        </div>
    </section>
    <section>
        <div class="container" style="width: 1340px;background: #ffffff;border-radius: 30px;padding: 10px;">
            <div style="background: #c4c4c4;width: 320px;height: 55px;text-align: center;margin-top: 0px;border-radius: 30px;padding: 0px;">
                <h1 class="d-xxl-flex justify-content-xxl-center align-items-xxl-end" style="margin-top: 23px;color: #ffffff;font-size: 37px;">Milestone Index:</h1>
            </div>
            <div>
                <div style="background: #fe4a49;border-radius: 25px;padding: 10px;margin: 20px;color: #ffffff;"><a class="text-center" href="m1.php" style="color: #ffffff;margin-left: 30px;">Milestone 1: Chapter 1 (Introduction) and Chapter 2 (Related Works)<br></a></div>
                <div style="background: #fe4a49;border-radius: 25px;padding: 10px;margin: 20px;color: #ffffff;"><a class="text-center" href="milestone2.html" style="color: #ffffff;margin-left: 30px;">Milestone 2: Chapter 3 (Requirement Analysis)<br></a></div>
                <div style="background: #009fb7;border-radius: 25px;padding: 10px;margin: 20px;color: #ffffff;"><a class="text-center" href="milestone3.html" style="color: #ffffff;margin-left: 30px;">Milestone 3: Chapter 4 (Design) and Chapter 5 (Conclusion)<br></a></div>
                <div style="background: #fe4a49;border-radius: 25px;padding: 10px;margin: 20px;color: #ffffff;"><a class="text-center" href="milestone4.html" style="color: #ffffff;margin-left: 30px;">Milestone 4: Complete final report from Chapter 1 - 5<br></a></div>
            </div>
        </div>
        <div style="width: 350px;transform: translate(595px);margin-top: 30px;">
            <p class="text-center" style="width: 350px;">©2022 Hakim Chulan U10Fyp. All rights reserved</p>
        </div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Sidebar-Menu.js"></script>
</body>

</html>